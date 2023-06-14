<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium</title>
    <?php
    include '_sidebarPetani.php';
    include '../../_navbar.php';
    echo '<br><br>'
    ?>
</head>
<body>
    <center>
        <!-- <img src="../../assets/logo_sidebar.jpg" alt="" class="logos"> -->
        <img src="../../assets/premium_btn.png" alt="" class="logos">
        <div class="desc">
            <p>Berlangganan sekarang dan nikmati membership</p> 
            <p>Dr.Tanitalk Premium. Akses fitur eksekutif</p> 
            <p>dan prioritas tinggi</p>
            <h2>RP 25.000</h2>
        </div>
        <a href="_bayar_premium.php"><img src="../../assets/premium_llist.png" alt="" class="list"></a>
    </center>
</body>
</html>

<style>
    .list{
        width: 30%;
        height: 30%;
        border-radius: 0px;
    }
    .logos{
        width: 10%;
        height: 10%;
        border-radius: 0px;
    }
    body{
        margin-left: 220px;
    }
    p h2{
        text-align: center;
    }
    .desc{
        margin-left: 50px;
    }
</style>