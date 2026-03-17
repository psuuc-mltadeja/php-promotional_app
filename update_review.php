<?php
include 'components/connect.php';
//$info_msg[]='its working!';
if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    header('Location: all_posts.php');
}


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $title = filter_var($title, FILTER_SANITIZE_STRING);

    $description = $_POST['description'];
    $description =  filter_var($description, FILTER_SANITIZE_STRING);

    $rating = $_POST['rating'];
    $rating = filter_var($rating, FILTER_SANITIZE_STRING);

    $update_review =$conn->prepare("UPDATE `reviews` SET rating =?, title =?, description =? WHERE id=?");
    $update_review ->execute([$rating, $title,$description, $get_id]);

    $success_msg[]='Review updated!';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Update Review</title>
</head>

<body>

    <?php
    include 'components/header.php';

    ?>



    <section class="account-form">

        <?php

        $select_review = $conn->prepare("SELECT * FROM `reviews` WHERE  id=?  LIMIT 1");
        $select_review->execute([$get_id]);

        if ($select_review->rowCount() > 0) {
            while ($fetch_review = $select_review->fetch(PDO::FETCH_ASSOC)) {



        ?>


                <form action="" method="post">
                    <h3>Edit your Review</h3>
                    <p class="placeholder">Review Title</p>
                    <input type="text" class="box" name="title" required maxlength="50" placeholder="Enter Review Title" value="<?= $fetch_review['title']; ?>">
                    <p class="placeholder">Review Description </p>
                    <textarea name="description" class="box" id="" cols="30" rows="10" placeholder="Enter Review" maxlength="1000" value="<?= $fetch_review['description']; ?>"></textarea>

                    <p class="placeholder"> Review Rating <span>*</span></p>
                    <select name="rating" id="" class="box" required>
                        <option value="<?= $fetch_review['rating']; ?>"><?= $fetch_review['rating']; ?></option>
                        <option value="2">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>


                    </select>
                    <input type="submit" value="Update Review" name="submit" class="btn">
                    <a href="view_post.php?get_id=<?= $fetch_review['post_id']; ?>" class="option-btn">Go Back</a>





                </form>


        <?php

            }
        } else {
            echo '  <p class="empty">Something went wrong!</p>';
        }
        ?>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>


    <?php
    include 'components/alers.php';
    ?>


</body>

</html>