<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Apotek</title>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <!--scripts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/favicon1.png">
    <!--css-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login.css" />
</head>
<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
}
?>

<style>

</style>

<body>
    <div class="header">
        <h3 class="text">Apotek APP</h3>
        <a href="<?= BASEURL; ?>/apoteker/tambah" class="link">
            <h4>Sign Up</h4>
        </a>
    </div>
    <div class="container">
        <div class="img">
            <img src="<?= BASEURL; ?>/img/a.svg" />
        </div>
        <div class="login-content">


            <form action="<?= BASEURL; ?>/login/cekLogin" method="POST">
                <!-- <img class="avatar" src="<?= BASEURL; ?>/img/logo.png" /> -->
                <h2 class="title">WELCOME TO Myn Pharmacy</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>USERNAME</h5>
                        <input type="text" autocomplete="off" name="username" class="input" />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>PASSWORD</h5>
                        <input type="password" name="pass" class="input" />
                    </div>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
            </form>


        </div>
    </div>
    <script type="text/javascript" src="<?= BASEURL; ?>/js/login.js"></script>
</body>

</html>