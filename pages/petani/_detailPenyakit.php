<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penyakit</title>
</head>
<body>
    <?php
        include "../../controller/conn.php";
        $query = "SELECT * FROM katalog_penyakit";
        $hasil = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($hasil)){
            echo "<div class='cardRow'>";
            echo "<div class='cardCol'>";
            echo "<div class='card'>";
            echo "<h2>" .  $row['nama_penyakit'] . "</h2>";
            echo "<img class='thumbnail' src='../../assets/upload_penyakit/" .$row['gambar'] ."'alt='gambar'>";
            echo "<p class='deskripsi'>" . $row['deskripsi'] . "</p>";
            echo "</div></div>";
        }
    ?>
    <a class="premium" href=""><img src="../../assets/button_premium.jpg" alt=""></a>
</body>
</html>
<style>

.premium img{
    position: absolute;
    bottom: 0;
    right: 0;
    width: 15%;
}

.card img{
    border-radius: 10px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

.cardRow{
    width: 100%;
    margin: 10px;
    display: flex;
    justify-content: center;
}

.cardCol{
    display: flex;
    justify-content: center;
    width: 70%;
    padding: 15px;
    display: grid;
}

h2, p, img{
    text-align: center;
}

</style>