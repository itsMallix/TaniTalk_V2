<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        include "../../controller/conn.php";

        if(isset($_POST['submit'])){
            $gambar = $_POST['gambar'];
            $nama_budidaya = $_POST['nama_budidaya'];
            $deskripsi = $_POST['deskripsi'];
            $nama_file = $_FILES['gambar']['name'];
            $tmp_file = $_FILES['gambar']['tmp_name'];

            $query = "insert into katalog_budidaya(judul,deskripsi,pengelola,gambar) values('$nama_budidaya','$deskripsi', 1,'$nama_file')";
            if(mysqli_query($conn,$query)){
                $lokasi = "../../assets/upload_budidaya/". $nama_file;
                move_uploaded_file($tmp_file,$lokasi);
                echo "<script type='text/javascript'>alert('Data berhasil ditambahkan');window.location='_tambahBudidaya.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('Gagal');window.location='_tambahBudidaya.php';</script>";
            }
        }

        
    ?>
    <div class="container">
        <div class="content">
            <form action="" method="post">
                <h2>TAMBAH DATA BUDIDAYA</h2>
                <label>Gambar</label>
                <input type="file" name="gambar" id="">
                <br><br>
                <label>Nama Penyakit</label><br>
                <input type="text" name="nama_budidaya" id="" placeholder="nama budidaya">
                <br><br>
                <label>Deskripsi</label><br>
                <input type="text" name="deskripsi" id="" placeholder="deskripsi">
                <br><br>
                <button class="submit" type="submit" name="submit">Submit</button><br>
            </form>
        </div>
    </div>
</body>
</html>

<style>
h2{
    text-align: center;
}

input{
    width: 90%;
    margin: 5px;
    border: 1px solid;
    border-radius: 5px;
    padding: 10px 10px;
    font-size: 11pt;
}
.submit{
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 5px;
    padding: 10px 20px;
    border-bottom: 5px;
    width: 100%;
    background-color: #1082EB;
    color: white;
}

.content{
    display: flex;
    justify-content: center;
    width: 100%;
    height: 400px;
    padding: 30px 30px;
    border-radius: 5px;
    box-shadow: 0px 10px 20px 0px;
    border-radius: 20px;
    background-color: #8A8A8A;
}
body{
    display: flex;
    justify-content: center;
    margin-top: 50px;
    background-color: #E9E9E9;
    color: white;
}
</style>