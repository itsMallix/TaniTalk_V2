<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <title>Petani</title>
</head>
<body>
    <?php
        session_start();
        include "../../controller/conn.php";
        include "_sidebarPetani.php";
        include "../../_navbar.php";

        if($_SESSION['level']==""){
            header("locaation:../index.php?pesan=gagal");
        }
    ?>

    <div class="container">
        <br><br><br><br><br>
        <img class="banner" src="../../assets/home.jpg" alt="">
    </div>
</body>
</html>

<style>
    .banner{
        border-radius: 10px;
        width: 60%;
        margin-left: 300px;

    }
</style>
