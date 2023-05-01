<?php
session_start();
include 'conn.php';

$email = $_POST['email'];
$paswd = $_POST['password'];

$login = mysqli_query($conn, "select * from user where email = '$email' and password = '$paswd'");
$check = mysqli_num_rows($login);

if($check > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=='petani'){
        $_SESSION['email'] = $email;
        $_SESSION['level'] = 'petani';
        echo "<script type='text/javascript'>alert('Login Berhasil');window.location='../register.php';</script>";
        header("location:../pages/petani/_dashboardPetani.php");
    }
    else if($data['level']=='pengelola'){
        $_SESSION['nama'] = $uname;
        $_SESSION['level'] = 'pengelola';
        header("location:../pages/pengelola/_dashboardPengelola.php");
    }
    else{
        echo "<script type='text/javascript'>alert('Email atau password salah');window.location='../register.php';</script>";
        header("location:../login.php;");
    }
}
else{
    header("location:../login.php");
}
?>
