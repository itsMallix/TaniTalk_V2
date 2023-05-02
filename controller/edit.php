<?php
include "conn.php";

if(!isset($_GET['id'])){
    die('id tidak ada');
}

$id = $_GET['id'];
$sql = "select * from katalog_budidaya";
$hasil = $conn->query($sql);

$data = $hasil->fetch_assoc();
?>