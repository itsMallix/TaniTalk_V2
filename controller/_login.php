<?php
session_start();
include 'conn.php';

class User {
    private $email;
    private $password;
    private $level;
    
    function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }
    
    function login() {
        global $conn;
        $email = $this->email;
        $paswd = $this->password;

        $login = mysqli_query($conn, "select * from user where email = '$email' and password = '$paswd'");
        $check = mysqli_num_rows($login);

        if($check > 0){
            $data = mysqli_fetch_assoc($login);
            
            if($email != $check['email'] || $paswd != $check['password']){
                echo "<script type='text/javascript'>alert('Email Tidak Valid');window.location='../login.php';</script>";
            }
            
            if($data['level']=='petani'){
                $_SESSION['email'] = $email;
                $_SESSION['level'] = 'petani';
                echo "<script type='text/javascript'>alert('Login Berhasil');window.location='../login.php';</script>";
                header("location:../pages/petani/_dashboardPetani.php");
            }
            else if($data['level']=='pengelola'){
                $_SESSION['email'] = $email;
                $_SESSION['level'] = 'pengelola';
                header("location:../pages/pengelola/_dashboardPengelola.php");
            }
            else{
                echo "<script type='text/javascript'>alert('Email atau password salah');window.location='../login.php';</script>";
                header("location:login.php;");
            }
        }else{
            echo "<script type='text/javascript'>alert('Email atau password salah');window.location='../login.php';</script>";
            header("location:login.php");
        }
    }
}

$email = $_POST['email'];
$paswd = $_POST['password'];

$user = new User($email, $paswd);
$user->login();
?>
