<?php
include 'components/connect.php';
//$info_msg[]='its working!';


//$info_msg[]='its working!';
if (isset($_POST['submit'])) {



  

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $password = $_POST['password'];
    $password = filter_var($password, FILTER_SANITIZE_STRING);


    $verify_email = $conn->prepare(" SELECT * FROM `users` WHERE  email = ? LIMIT 1");
    $verify_email->execute([$email]);
   

    if ($verify_email->rowCount() > 0) {
        $fetch = $verify_email->fetch(PDO::FETCH_ASSOC);
        $verify_pass = password_verify($password, $fetch['password']);
        if($verify_pass ==1){
            setcookie('user_id',$fetch['id'],time()+60*60*24*30, '/');
           
            header("Location: description/home.php");
           
        } else{
            $warning_msg[]= 'Incorrect password!'; 
        }
     
    }else{
        $warning_msg[]= 'Incorrect email!';
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
    <title>Login</title>
</head>

<body>





    <?php
    include 'components/header.php';

    ?>




    <section class="account-form">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Login your account!</h3>


            <p class="placeholder">Your Email <span>*</span></p>
            <input type="email" name="email" id="" required maxlength="50" placeholder="Enter your email" class="box">

            <p class="placeholder" style="color
            :black;">Your Password <span>*</span></p>
            <input type="password" name="password" id="" required maxlength="50" placeholder="Enter your password" class="box">


            <p class="link">Don't have an account? <a href="register.php">Register Now</a></p>

            <input type="submit" value="Login now" class="btn" name="submit">


        </form>

    </section>


    <?php
    include 'components/alers.php';
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>