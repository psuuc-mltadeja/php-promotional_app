<?php
include 'components/connect.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>All Post</title>
</head>

<body>

    <?php include 'components/header.php'; ?>

    <section class="all-posts">
        <div class="heading">
            <h1>All Posts</h1>
        </div>
        <div class="box-container">

            <?php

            $select_post = $conn->prepare("SELECT * FROM `vendors`");
            $select_post->execute();
            if ($select_post->rowCount() > 0) {
                while ($fetch_post = $select_post->fetch(PDO::FETCH_ASSOC)) {


                    $post_id = $fetch_post['id'];
                    $count_reviews = $conn->prepare("SELECT *FROM  `reviews` WHERE  post_id =?");
                    $count_reviews->execute([$fetch_post['id']]);

                    $total_reviews = $count_reviews->rowCount();




            ?>
                    <div class="box">
                        <img src="uploaded_files/<?= $fetch_post['image']; ?>" alt="" class="image">
                        <h3 class="title"><?= $fetch_post['title']; ?></h3>
                        <p class="total-reviews"> <i class="fas fa-star"></i><span><?= $total_reviews; ?></span> </p>
                        <a href="view_post.php?get_id=<?= $post_id; ?>" class="inline-btn">Check</a>

                    </div>

            <?php


                }
            } else {
                echo '<p class="empty">No posts added yet!</p>';
            }
            ?>


        </div>







    </section>
















    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <?php
    include 'components/alers.php';
    ?>

</body>

</html>