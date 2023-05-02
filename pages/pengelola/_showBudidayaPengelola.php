<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        session_start();
        include "_sidebarPengelola.php";
        include "../../controller/conn.php";
        include "_navbar.php";

        if($_SESSION['level']==""){
            header("locaation:../index.php?pesan=gagal");
        }

        $query = "SELECT * FROM katalog_budidaya WHERE judul = 'Budidaya Kakao'";
        $hasil = mysqli_query($conn,$query);

        echo "<br><br><br><br><br><br>";
        while($row = mysqli_fetch_array($hasil)){
            echo "<div class='cardRow'>";
            echo "<div class='cardCol'>";
            echo "<div class='card'>";
            echo "<h2>" .  $row['judul'] . "</h2>";
            echo "<img class='thumbnail' src='../../assets/upload_budidaya/" .$row['gambar'] ."'alt='gambar'>";
            // echo "<a href='_detailPenyakit.php' target='_blank'><button class='detailBtn'>Detail</button></a>";
            // echo "<h3 class='judul'>" . $row['judul'] . "</h3>";
            echo "<p class='deskripsi'>" . $row['deskripsi'] . "</p>";
            echo "</div></div>";
        }
    ?>
</body>
</html>

<style>
    *{
    box-sizing: border-box;
}

.tambah{
    background-color: #4CAF50;
    border: none;
    color: #242424;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 50%;
    margin-left: 430px;
    margin-top: 10px;
}

.card img{
    height: 200px;
    width: 200px;
    margin: 5px;
    border-radius: 5px;
}

.cardRow{
    width: 100%;
    margin: 0 5px;
    margin-left: 300px;
}

.cardCol{
    width: 20%;
    float: left;
    padding: 15px;
    display: grid;
}

h2{
    text-align: center;
}

.card{
    background-color: white;
    padding: 20px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 2);
}


body{
    /* margin-left: 390px; */
    /* overflow-x: hidden; */
    width: 100vw;
    height: 100vh;
    max-width: 10%;
}
.detailBtn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
  
}

.detailBtn:hover {
  background-color: #3e8e41;
}

</style>