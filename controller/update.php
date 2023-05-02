<?php
    include "conn.php";

    if(isset($_GET['id']) && isset($_POST['submit'])){
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        // $gambar = $_POST['gambar'];
        $nama_file = $_FILES['gambar']['name'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $pengelola = 1;
        $edit = time();

        $sql = "update `katalog_budidaya` set 
                `judul` = '$judul',
                `deskripsi` = '$deskripsi',
                `editedAt` = '$edit',
                `pengelola` = '$pengelola',
                `gambar` = '$nama_file'
                where id = $id";

        if($conn->query($sql)){
            $lokasi = "../assets/upload_budidaya/";
            move_uploaded_file($tmp_file,$lokasi.$nama_file);
            echo "<script type='text/javascript'>alert('Data berhasil di update');window.location='../pages/pengelola/_editBudidayaPengelola.php';</script>";
        }else{
            echo "<script type='text/javascript'>alert('Oops ada yang salah!');window.location='../pages/pengelola/_editBudidayaPengelola.php';</script>";
        }

    }else{
        echo "<script type='text/javascript'>alert('INVALID');window.location='../pages/pengelola/_editBudidayaPengelola.php';</script>";
    }
?>

