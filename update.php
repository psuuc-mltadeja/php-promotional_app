<?php
include 'components/connect.php';
//$info_msg[]='its working!';

if (isset($_POST['submit'])) {

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE id =? LIMIT 1");
    $select_user->execute([$user_id]);
    $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);



    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);


    if (!empty($name)) {
        $update_name = $conn->prepare("UPDATE `users` SET name =? WHERE id=?");

        $update_name->execute([$name, $user_id]);
        $success_msg[] = 'Username Updated';
    }
    if (!empty($email)) {
        $verify_email = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND id != ?");
        $verify_email->execute([$email, $user_id]);
        if ($verify_email->rowCount() > 0) {
            $warning_msg[] = 'Email Already taken!';
        } else {
            $update_email = $conn->prepare("UPDATE `users` SET email = ? WHERE id = ?");
            $update_email->execute([$email, $user_id]);
            $success_msg[] = 'Email Updated';
        }
    }
    




    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //$password = filter_var($password, FILTER_SANITIZE_STRING);

    // $c_pass = password_verify($_POST['c_pass'], $password);
    // $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);


    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $rename =  create_unique_id() . '.' . $ext;
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_files/' . $rename;

    if (!empty($image)) {
        if ($image_size > 2000000) {
            $warning_msg[] = 'Image size is too large!';
        } else {
            $update_image  = $conn->prepare("UPDATE `users` SET image =? WHERE id=?");
            $update_image->execute([$rename, $user_id]);
            move_uploaded_file($image_tmp_name, $image_folder);



            if ($fetch_user['image'] != '') {
                unlink('uploaded_files/' . $fetch_user['image']);
            }
            $success_msg[] = 'Profile Updated';
        }
    }

    $prev_pass = $fetch_user['password'];


    $old_pass = password_hash($_POST['old_pass'], PASSWORD_DEFAULT);
    $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);

    $empty_old = password_verify('', $old_pass);

    $new_pass = password_hash($_POST['new_pass'], PASSWORD_DEFAULT);
    $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);


    $empty_new = password_verify('', $new_pass);


    $c_pass = password_verify($_POST['c_pass'], $new_pass);
    $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);
    if($empty_old !=1){
        $verify_old_pass = password_verify($_POST['old_pass'], $prev_pass);
        if($verify_old_pass ==1){
            if($c_pass ==1){
                if($new_pass !=1){
                    $update_pass = $conn -> prepare("UPDATE `users` SET password =? WHERE id=?");
                    $update_pass ->execute([$new_pass,$user_id]);
                    $success_msg[]='Password Updated!';

                }else{
                    $warning_msg[]='Please enter new password';
                }

            }else{
                $warning_msg[]='Confirm password not matched!';
            }

            
        }else{
            $warning_msg[]= 'Old Password not matched!';
    }

    }

}


if(isset($_POST['delete_image'])){
    $select_old_pic = $conn->prepare("  SELECT *FROM `users`  WHERE  id= ? LIMIT 1");
    $select_old_pic -> execute([$user_id]);
    $fetch_old_pic = $select_old_pic->fetch(PDO::FETCH_ASSOC);
    
    if($fetch_old_pic['image']==''){
        $warning_msg[]='Image already deleted';
    }else{
        $updated_old_pic = $conn ->prepare("UPDATE `users` SET image =? WHERE id=?");
        $updated_old_pic -> execute(['',$user_id]);
        if($fetch_old_pic['image'] != ''){
            unlink('uploaded_files/'.$fetch_old_pic['image']);
        }
        $success_msg[]='Image deleted!';
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
    <title>Update</title>
</head>

<body>

    <?php
    include 'components/header.php';

    ?>


    <section class="account-form">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Update your account</h3>

            <p class="placeholder">Your Name </p>
            <input type="text" name="name" id="" maxlength="50" placeholder=" " class="box" value="<?= $fetch_profile['name'] ?>">


            <p class="placeholder">Your Email </p>
            <input type="email" name="email" id="" maxlength="50" placeholder="" class="box" value="<?= $fetch_profile['email'] ?>">

            <p class="placeholder">Old Password</p>
            <input type="password" name="old_pass" id="" maxlength="50" placeholder="Enter your old password" class="box">



            <p class="placeholder">New Password </p>
            <input type="text" name="new_pass" id="" maxlength="50" placeholder="Enter your new password" class="box">


            <p class="placeholder">Confirm Password </p>
            <input type="text" name="c_pass" id="" maxlength="50" placeholder="Confirm your new password" class="box">




            <?php

            if ($fetch_profile['image'] != '') { ?>
                <img src="uploaded_files/<?= $fetch_profile['image']; ?>" class="image" style="height:20rem;
                    width:100%; object-fit: contain;
  margin-top: .5rem; ">
                <input type="submit" value="Delete image" name="delete_image" class="delete-btn" onclick="return confirm('delete this image?')">
            <?php  }; ?>
            <p class="placeholder">Profile Picture</p>
            <input type="file" name="image" id="" class="box" accept="image/*">



            <input type="submit" value="Update now" class="btn" name="submit">


        </form>

    </section>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>


    <?php
    include 'components/alers.php';
    ?>


</body>

</html>