<?php
include "conn.php";

if(isset($_GET['id']) && !empty($_GET['id'])){
    echo "<script>
        var result = confirm('Apakah Anda yakin ingin menghapus data ini? Klik tombol OK untuk menghapus, atau klik tombol Cancel untuk membatalkan', '');
        if (result !== null) {
            window.location.href = '../pages/pengelola/_hapusBudidayaPengelola.php?id=$id';
        } else {
            window.history.back();
        }
    </script>";
    // echo "<script type='text/javascript'>alert('Yakin untuk menghapus');window.location='../register.php';</script>";
    $id = $_GET['id'];
    mysqli_query($conn, "delete from katalog_budidaya where id = '$id'");


}

header("location:../pages/pengelola/_hapusBudidayaPengelola.php");
?>