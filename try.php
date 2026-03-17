<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <style>
        * {
            font-family: "Comfortaa", cursive;
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
            text-transform: capitalize;
            -webkit-transition: all .2s linear;
            transition: all .2s linear;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 9rem;
        }

        html ::-webkit-scrollbar {
            width: 0.5rem;
        }

        html ::-webkit-scrollbar-thumb {
            background: #d9296f;
        }

        body {
            background: #f8f9fc;
            overflow-x: hidden;
        }

        section {
            padding: 3rem 9%;
        }

        .heading {
            text-align: center;
            margin-top: 2rem;
        }

        .heading span {
            color: #d9296f;
            font-size: 2rem;
        }

        .heading h1 {
            font-size: 4rem;
            color: #000;
        }

        .btn {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            font-size: 1.7rem;
            color: #d9296f;
            border: 0.2rem solid #d9296f;
            border-radius: 5rem;
            cursor: pointer;
            background: none;
        }

        .btn:hover {
            background: #d9296f;
            color: #f8f9fc;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1100;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem 9%;
            box-shadow: 0 1px 6px 0 rgba(32 32 36 / 28%);
        }

        .header .navbar a {
            font-size: 1.7rem;
            color: #3d3d3d;
            display: inline-block;
            margin: 0 1rem;
            text-decoration: none;
        }

        .header .navbar a:hover {
            color: #d9296f;
        }

        .logo {
            font-size: 2.5rem;
            color: #000;
            font-weight: bolder;
            text-decoration: none;
        }

        .logo span {
            color: #d9296f;
        }

        #menu-btn {
            font-size: 2.5rem;
            color: #000;
            cursor: pointer;
            display: none;
        }

        .active {
            display: block;
        }

        .profile {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 1200;
            background: #fff;
            padding: 1rem;
            box-shadow: 0 1px 6px 0 rgba(32 32 36 / 28%);
            border-radius: 0.5rem;
        }

        .profile p {
            margin-bottom: 0.5rem;
        }

        .profile .image {
            height: 5rem;
            width: 5rem;
            object-fit: contain;
            margin-top: 0.5rem;
            border-radius: 50%;
        }

        .flex-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .inline-option-btn {
            margin-top: 1rem;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            background-color: #d9296f;
            color: #f8f9fc;
        }

        .delete-btn {
            margin-top: 1rem;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            background-color: coral;
            color: #f8f9fc;
        }
    </style>

    <title>Header</title>
</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" data-aos="zoom-in-left" data-aos-delay="150" class="logo"> <span>T</span>aste<span>T</span>ravels</a>
        <nav class="navbar">
            <a href="all_posts.php" data-aos="zoom-in-left" data-aos-delay="300">All Posts</a>
            <a href="login.php" data-aos="zoom-in-left" data-aos-delay="450">Login</a>
            <a href="register.php" data-aos="zoom-in-left" data-aos-delay="600">Register</a>
        </nav>

        <?php
        if ($user_id != '') {
        ?>
            <div class="fas fa-user" id="user-btn"></div>
        <?php }; ?>

        <div class="profile">
            <?php
            if ($user_id != '') {
                $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id=? LIMIT 1");
                $select_profile->execute([$user_id]);
                if ($select_profile->rowCount() > 0) {
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
                    <p><?= $fetch_profile['name']; ?></p>
                    <?php if ($fetch_profile['image'] != '') { ?>
                        <img src="uploaded_files/<?= $fetch_profile['image']; ?>" class="image">
                    <?php }; ?>
                    <a href="update.php" class="btn">Update Profile</a>
                    <a href="components/logout.php" class="delete-btn" onclick="return confirm('logout from this website?')">Logout</a>
                <?php
                } else {
                ?>
                    <div class="flex-btn">
                        <p>Please Login or Register</p>
                        <a href="login.php" class="inline-option-btn">Login</a>
                        <a href="register.php" class="inline-option-btn">Register</a>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="flex-btn">
                    <p>Please Login or Register</p>
                    <a href="login.php" class="inline-option-btn">Login</a>
                    <a href="register.php" class="inline-option-btn">Register</a>
                </div>
            <?php
            }
            ?>
        </div>
    </header>

    <script>
        let profile = document.querySelector('.header .profile');
        document.querySelector('#user-btn').onclick = () => {
            profile.classList.toggle('active');
        }

        window.onscroll = () => {
            profile.classList.remove('active');
        }

        document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
            inputNumber.oninput = () => {
                if (inputNumber.value.length > inputNumber.maxlength)
                    inputNumber.value = inputNumber.value.slice(0, inputNumber.maxlength);
            };
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>

</html>
