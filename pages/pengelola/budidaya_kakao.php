<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }

        .cardRow {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .cardCol {
            width: 300px;
            margin: 10px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            text-align: center;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .detailBtn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .detailBtn:hover {
            background-color: #45a049;
        }
    </style>
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

        echo "<div class='cardRow'>";
        while($row = mysqli_fetch_array($hasil)){
            echo "<div class='cardCol'>";
            echo "<div class='card'>";
            echo "<h2>" .  $row['judul'] . "</h2>";
            echo "<img class='thumbnail' src='../../assets/upload_budidaya/" .$row['gambar'] ."'alt='gambar'>";
            echo "<a href='budidaya_kakao_detail.php' target='_blank'><button class='detailBtn'>Detail</button></a>";
            echo "</div></div>";
        }
        echo "</div>";
    ?>
</body>
</html>
