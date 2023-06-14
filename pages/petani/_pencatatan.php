<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan</title>
    <?php
    include '_sidebarPetani.php';
    include '../../_navbar.php';
    include '../../controller/conn.php';

    $sql = "SELECT * FROM pencatatan";
    $hasil = mysqli_query($conn,$sql);
    if(!$hasil){
        die("Query gagal: ". mysqli_error($conn));
    }
    ?>
</head>
<body>
    <form action="../../controller/_pencatatan.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="upload" value="UPLOAD">
    </form>
    <br><br><br>
</body>
</html>

<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>