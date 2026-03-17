<?php
include 'components/connect.php';
//$info_msg[]='its working!';

if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    header('Location: all_posts.php');
}

if (isset($_POST['delete_review'])) {
    $delete_id = $_POST['delete_id'];
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

    $verify_delete = $conn->prepare("SELECT * FROM `reviews` WHERE id=?");
    $verify_delete->execute([$delete_id]);

    if ($verify_delete->rowCount() > 0) {
        $delete_review = $conn->prepare("DELETE from `reviews` WHERE id =?");
        $delete_review->execute([$delete_id]);
        $success_msg[] = 'Review deleted!';
    } else {
        $warning_msg[] = 'Review is already deleted!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>View Post</title>
</head>

<body>
    <?php
    include 'components/header.php'; ?>
    <section class="view-post">

        <div class="heading">
            <h1>Post Details</h1>
            <a href="all_posts.php" class="inline-option-btn" style="margin-top: 0;">All Posts</a>
        </div>

        <?php

        $select_post = $conn->prepare("SELECT * FROM  `vendors` WHERE id =? LIMIT 1");
        $select_post->execute([$get_id]);
        if ($select_post->rowCount() > 0) {
            while ($fetch_post = $select_post->fetch(PDO::FETCH_ASSOC)) {


                $total_ratings = 0;
                $rating_1 = 0;
                $rating_2 = 0;
                $rating_3 = 0;
                $rating_4 = 0;
                $rating_5 = 0;


                $select_ratings = $conn->prepare("SELECT *FROM `reviews` WHERE post_id =?");
                $select_ratings->execute([$fetch_post['id']]);
                $total_reviews = $select_ratings->rowCount();
                while ($fetch_rating = $select_ratings->fetch(PDO::FETCH_ASSOC)) {
                    $total_ratings += $fetch_rating['rating'];
                    if ($fetch_rating['rating'] == 1) {
                        $rating_1 += $fetch_rating['rating'];
                    }
                    if ($fetch_rating['rating'] == 2) {
                        $rating_2 += $fetch_rating['rating'];
                    }
                    if ($fetch_rating['rating'] == 3) {
                        $rating_3 += $fetch_rating['rating'];
                    }
                    if ($fetch_rating['rating'] == 4) {
                        $rating_4 += $fetch_rating['rating'];
                    }
                    if ($fetch_rating['rating'] == 5) {
                        $rating_5 += $fetch_rating['rating'];
                    }
                }

                if ($total_reviews != 0) {
                    $average =  round($total_ratings / $total_reviews, 1);
                } else {
                    $average = 0;
                }



        ?>
                <div class="row">
                    <div class="col">
                        <img src="uploaded_files/<?= $fetch_post['image']; ?>" alt="" class="image">
                        <h3 class="title"><i class="bi bi-house-check"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-check" viewBox="0 0 16 16">
                                <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514Z" />
                            </svg> <?= $fetch_post['title']; ?></h3>
                        <h3 class="title"> <i class="bi bi-geo-alt"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg> <?= $fetch_post['location']; ?></h3>
                        <h3 class="title"> <i class="bi bi-telephone"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg></i> <?= $fetch_post['phone']; ?></h3>

                    </div>
                    <div class="col">
                        <div class="flex">
                            <div class="total-review">
                                <h3> <?= $average; ?> <i class="fas fa-star"></i></h3>
                                <p> <?= $total_reviews; ?> Reviews</p>
                            </div>

                            <div class="total-ratings">
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span> <?= $rating_5; ?> </span>
                                </p>
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>

                                    <span> <?= $rating_4; ?> </span>
                                </p>
                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>

                                    <span> <?= $rating_3; ?> </span>
                                </p>

                                <p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>

                                    <span> <?= $rating_2; ?> </span>
                                </p>

                                <p>
                                    <i class="fas fa-star"></i>

                                    <span> <?= $rating_1; ?> </span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

        <?php
            }
        } else {
            echo '<p class="empty">Post is missing!</p>';
        }

        ?>




    </section>

    <section class="reviews-container">
        <div class="heading">
            <h1>User's Review</h1>
            <a href="add_review.php? get_id=<?= $get_id; ?>" class="inline-btn" style="margin-top: 0;">Add Review</a>
        </div>
        <div class="box-container">
            <?php
            $select_reviews = $conn->prepare("SELECT *FROM `reviews` WHERE post_id =?");
            $select_reviews->execute([$get_id]);
            if ($select_reviews->rowCount() > 0) {
                while ($fetch_review = $select_reviews->fetch(PDO::FETCH_ASSOC)) {

            ?>
                    <div class="box" <?php if ($fetch_review['user_id'] == $user_id) {
                                            echo 'style="order: -1" ';
                                        }; ?>>

                        <?php
                        $select_user = $conn->prepare("SELECT *FROM `users` WHERE id =?");
                        $select_user->execute([$fetch_review['user_id']]);
                        while ($fetch_user = $select_user->fetch(PDO::FETCH_ASSOC)) {
                        ?>

                            <div class="user">
                                <?php if ($fetch_user['image'] != '') { ?>
                                    <img src="uploaded_files/<?= $fetch_user['image']; ?>" alt="">

                                <?php } else { ?>
                                    <h3> <?= substr($fetch_user['user'], 0, 1); ?></h3>

                                <?php }; ?>


                                <div>
                                    <p> <?= $fetch_user['name']; ?></p>
                                    <span> <?= $fetch_review['date']; ?></span>
                                </div>

                            </div>
                        <?php }; ?>
                        <div class="ratings">

                            <?php if ($fetch_review['rating'] == 1) { ?>

                                <p style="background:var(--red);">
                                    <i class="fas fa-star"></i>
                                    <span> <?= $fetch_review['rating']; ?></span>

                                </p>
                            <?php }; ?>

                            <?php if ($fetch_review['rating'] == 2) { ?>

                                <p style="background:var(--orange);">
                                    <i class="fas fa-star"></i>
                                    <span> <?= $fetch_review['rating']; ?></span>

                                </p>
                            <?php }; ?>
                            <?php if ($fetch_review['rating'] == 3) { ?>

                                <p style="background:var(--orange);">
                                    <i class="fas fa-star"></i>
                                    <span> <?= $fetch_review['rating']; ?></span>

                                </p>
                            <?php }; ?>
                            <?php if ($fetch_review['rating'] == 4) { ?>

                                <p style="background:var(--main-color);">
                                    <i class="fas fa-star"></i>
                                    <span> <?= $fetch_review['rating']; ?></span>

                                </p>
                            <?php }; ?>

                            <?php if ($fetch_review['rating'] == 5) { ?>

                                <p style="background:var(--main-color);">
                                    <i class="fas fa-star"></i>
                                    <span> <?= $fetch_review['rating']; ?></span>

                                </p>
                            <?php }; ?>

                        </div>
                        <h3 class="title"><?= $fetch_review['title']; ?></h3>
                        <?php

                        if ($fetch_review['description'] != '') { ?>
                            <p class="description"> <?= $fetch_review['description']; ?></p>



                        <?php }; ?>

                        <?php if ($fetch_review['user_id'] == $user_id) { ?>
                            <form action="" method="post" class="flex-btn">
                                <input type="hidden" name="delete_id" value="<?= $fetch_review['id']; ?>">
                                <a href="update_review.php? get_id=<?= $fetch_review['id']; ?>" class="inline-option-btn">Update Review</a>

                                <input type="submit" value="delete review" class="inline-delete-btn" name="delete_review" onclick="return confirm('delete this review?')">
                            </form>

                        <?php }; ?>




                    </div>

            <?php
                }
            } else {
                echo '<p class="empty">No review(s) added yet!</p>';
            }


            ?>

        </div>



    </section>























    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>



    <?php
    include 'components/alers.php';
    ?>


</body>

</html>