<?php
include 'components/connect.php';
//$info_msg[]='its working!';

if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    header('Location: all_posts.php');
}

if(isset($_POST['submit'])){
    if($user_id !=''){
        $id= create_unique_id();
        $title = $_POST['title'];
        $title = filter_var($title, FILTER_SANITIZE_STRING);

        $description=$_POST['description'];
        $description =  filter_var($description, FILTER_SANITIZE_STRING);

        $rating= $_POST['rating'];
        $rating =filter_var($rating, FILTER_SANITIZE_STRING);

        $verify_review = $conn ->prepare("SELECT * FROM `reviews` WHERE post_id =? AND user_id=?");
        $verify_review ->execute([$get_id, $user_id]);
        if($verify_review->rowCount()>0){
            
            $warning_msg[] = 'Your review is already added!';
       
        }else{
            $add_review = $conn->prepare("INSERT INTO `reviews` (id, post_id, user_id, rating, title, description, date) VALUES (?,?,?,?,?,?, CURDATE())");
            $add_review->execute([$id, $get_id, $user_id, $rating, $title, $description]);
            
            $success_msg[] ='Review added';

        }





    }else{
        $warning_msg[]='Please Login first!';
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
    <title>Add Review</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <section class="account-form">

        <form action="" method="post">
            <h3>Post your Review</h3>
            <p class="placeholder">Review Title</p>
            <input type="text" class="box" name="title" required maxlength="50" placeholder="Enter Review Title">
            <p class="placeholder">Review Description </p>
            <textarea name="description" class="box" id="" cols="30" rows="10" placeholder="Enter Review" maxlength="1000"></textarea>

            <p class="placeholder"> Review Rating <span>*</span></p>
            <select name="rating" id="" class="box" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>


            </select>
            <input type="submit" value="Submit Review" name="submit" class="btn">
            <a href="view_post.php?get_id=<?=$get_id; ?>" class="option-btn">Go Back</a>





        </form>
    </section>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>



    <?php
    include 'components/alers.php';
    ?>


</body>

</html>