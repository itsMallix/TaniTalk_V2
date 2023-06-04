<?php
include "conn.php";

if($_POST['upload']){
    $format = array('png','jpg','docx','xlxs','pdf','txt');
    $nama = $_FILES['file']['name'];
    $i = explode('.',$nama);
    $ekstensi = strtolower(end($i));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if(in_array($ekstensi, $format)===true){
        if($ukuran<1044070){
            move_uploaded_file($file_tmp, '../assets/upload_pencatatan/'.$nama);
            $query = mysqli_query($conn, "INSERT INTO pencatatan (nama) VALUES('$nama')");
            if($query){
                echo "<script type='text/javascript'>alert('File berhasil di upload');window.location='../pages/petani/_pencatatan.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('File gagal di upload');window.location='../pages/petani/_pencatatan.php';</script>";
            }
        }
        else{
            echo "<script type='text/javascript'>alert('Gagal upload ukuran terlalu besar');window.location='../pages/petani/_pencatatan.php';</script>";
        }
    }elseif($_POST['upload']==NULL){
        echo "<script type='text/javascript'>alert('Form tidak boleh kosong');window.location='../pages/petani/_pencatatan.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Ekstensi file tidak didukung');window.location='../pages/petani/_pencatatan.php';</script>";
    }
}

?>