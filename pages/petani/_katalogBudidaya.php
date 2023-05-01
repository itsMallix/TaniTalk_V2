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
        include "_sidebarPetani.php";
        include "../../controller/conn.php";
        include "../../_navbar.php";

        if($_SESSION['level']==""){
            header("locaation:../index.php?pesan=gagal");
        }

        // $query = "SELECT * FROM katalog_budidaya";
        // $hasil = mysqli_query($conn,$query);

        // echo "<br><br><br><br><br><br>";
        // while($row = mysqli_fetch_array($hasil)){
        //     echo "<div class='cardRow'>";
        //     echo "<div class='cardCol'>";
        //     echo "<div class='card'>";
        //     echo "<img class='thumbnail' src='../../assets/upload_budidaya/" .$row['gambar'] ."'alt='gambar'>";
        //     // echo "<h3 class='judul'>" . $row['judul'] . "</h3>";
        //     // echo "<p class='deskripsi'>" . $row['deskripsi'] . "</p>";
        //     echo "</div></div>";
        // }
    ?>
    <div class="head">
        <div class="content">
            <br><br><br><br><br>
            <a href="_tambahBudidaya.php"><button class="tambah"><i class="fa-solid fa-circle-plus"></i>  Tambah</button></a>
        </div>
    </div>
    <div class="list_content">
        <div class="list_item">
            <ul>
                <li>
                    <img class="icon" src="../../assets/kopi_icon.png" alt="">
                </li>
                <li>
                    <img class="icon" src="../../assets/kakao_icon.png" alt="">
                </li>
                <li>
                    <img class="icon" src="../../assets/apel_icon.png" alt="">
                </li>
                <li>
                    <img class="icon" src="../../assets/anggur_icon.png" alt="">
                </li>
            </ul>
        </div>
    </div>
</body>
</html>

<style>
.list_content{
    vertical-align: middle;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    width: 30%;
    margin-left: 300px;
}
.head{
    background-color: #E9E9E9;
    height: 150px;
    width: 100%;
}
.tambah {
  background-color: #6CBB08;
  border: none;
  color: #ffffff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
  width: 10%;
  margin-left: 400px;
  margin-top: 10px;
  
}

.tambah:hover {
  background-color: grey;
}
</style>
