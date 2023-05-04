<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pilih Tanaman</title>
</head>
<body>
    <?php
        include "_navbar.php";
        include "_sidebarPengelola.php";
    ?>
    <br><br><br>
    <div class="container">p</div>
    <br><br>
    <table border="0" class="tanaman">
        <tr>
            <td><a href="_kalkulatorPupuk.php"><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
        </tr>
        <tr>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
        </tr>
        <tr>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
            <td><a href=""><img class="icon" src="../../assets/Pilih_kopi.png" alt=""></a></td>
        </tr>
    </table>
    <br>
</body>
</html>
<style>
.container{
    width: 100%;
    background-color: #E9E9E9;
    height: 180px;
}
 table{
    margin-left: 290px;
}
tr, td{
    width: 300px;
    height: 200px;
}
.icon{
    width: 20%;
}
.icon:hover{
    width: 30%;
    transition: all 0.5s ease;
}
</style>