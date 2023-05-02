<?php
include "conn.php";

$id = $_GET['id'];
mysqli_query($conn, "delete from katalog_budidaya where id = '$id'");

header("location:../pages/pengelola/_hapusBudidayaPengelola.php");
?>