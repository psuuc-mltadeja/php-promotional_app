<?php
include 'components/connect.php';

if (isset($_POST['submit'])) {
    $id = create_unique_id();
    $title = $_POST['name'];
    $title = filter_var($title, FILTER_SANITIZE_STRING);

    $location = $_POST['location'];
    $location = filter_var($location, FILTER_SANITIZE_STRING);

    $phone = $_POST['phone'];
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    $rename = create_unique_id() . '.' . $ext;
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_files/' . $rename;

    if (!empty($image)) {
        if ($image_size > 2000000) {
            $warning_msg[] = 'Image size is too large!';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    } else {
        $rename = '';
    }

    $insert_post = $conn->prepare("INSERT INTO `vendors` (id, title,location, phone, image) VALUES (?, ?, ?, ?, ?)");
    $insert_post->execute([$id, $title, $location, $phone, $rename]);

    $success_msg[] = 'Post created successfully!';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Create Post</title>
</head>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>

    <?php include 'components/header.php'; ?>

    <section class="account-form">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Create your post</h3>

            <p class="placeholder">Post Title <span>*</span></p>
            <input type="text" name="name" id="" required maxlength="100" placeholder="Enter the post title" class="box">

            <p class="placeholder">Location <span>*</span></p>
            <input type="text" name="location" id="" required maxlength="100" placeholder="Enter the location" class="box">

            <p class="placeholder">Phone Number <span>*</span></p>
            <input type="text" name="phone" id="" required maxlength="50" placeholder="Enter phone number" class="box">

            <p class="placeholder">Image</p>
            <input type="file" name="image" id="" class="box" accept="image/*">

            <input type="submit" value="Create Post" class="btn" name="submit">
        </form>
    </section>

    <?php include 'components/alers.php'; ?>
</body>

</html>