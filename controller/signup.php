<?php
include "conn.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    if(empty($nama) || empty($email) || empty($alamat) || empty($password) || empty($level)){
        echo "Field tidak boleh kosong";
        exit();
    }

    $sql = "select * from user where nama = '$nama' or email = '$password'";
    $hasil = $conn->query($sql);

    if($hasil->num_rows > 0){
        echo "<script type='text/javascript'>alert('Nama atau email sudah terdaftar');window.location='../register.php';</script>";
        exit();
    }

    $sqli = "insert into user (nama, alamat, email, password, level) values ('$nama', '$alamat', '$email', '$password', '$level')";

    if($conn->query($sqli) === TRUE){
        echo "<script type='text/javascript'>alert('Data berhasil di daftarkan, Silahkan Login');window.location='../index.php';</script>";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>