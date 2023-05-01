<?php
include "conn.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    if(empty($nama) || empty($email)  || empty($password) || empty($level)){
        echo "Field tidak boleh kosong";
        exit();
    }

    $sql = "select * from user where nama = '$nama' or password = '$password'";
    $hasil = $conn->query($sql);

    if($hasil->num_rows > 0){
        echo "<script type='text/javascript'>alert('Nama atau email sudah terdaftar');window.location='../register.php';</script>";
        exit();
    }

    $sqli = "insert into user (nama, email, password, level) values ('$nama', '$email', '$password', '$level')";

    if($conn->query($sqli) === TRUE){
        echo "<script type='text/javascript'>alert('Data berhasil di daftarkan, Silahkan Login');window.location='../index.php';</script>";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>