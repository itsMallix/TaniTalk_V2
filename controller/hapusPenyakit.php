<?php
include "conn.php";

if(isset($_GET['id']) && !empty($_GET['id'])){
    // echo "<script type='text/javascript'>alert('Yakin untuk menghapus');window.location='../register.php';</script>";
    $id = $_GET['id'];
    mysqli_query($conn, "delete from katalog_penyakit where id = '$id'");


}

header("location:../pages/pengelola/_hapusBudidayaPengelola.php");
?>