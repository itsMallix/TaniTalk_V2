<?php
include "conn.php";

class User {
    private $nama;
    private $email;
    private $password;
    private $level;
    private $conn;

    function __construct($nama, $email, $password, $level) {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
        $this->level = $level;
        $this->conn = new mysqli('localhost', 'root', '', 'tanitalk');
    }

    function register() {
        $nama = $this->nama;
        $email = $this->email;
        $password = $this->password;
        $level = $this->level;

        if(empty($nama) || empty($email)  || empty($password) || empty($level)){
            echo "Field tidak boleh kosong";
            exit();
        }

        $sql = "select * from user where nama = '$nama' or password = '$password'";
        $hasil = $this->conn->query($sql);

        if($hasil->num_rows > 0){
            echo "<script type='text/javascript'>alert('Nama atau email sudah terdaftar');window.location='../register.php';</script>";
            exit();
        }

        $sqli = "insert into user (nama, email, password, level) values ('$nama', '$email', '$password', '$level')";

        if($this->conn->query($sqli) === TRUE){
            echo "<script type='text/javascript'>alert('Data berhasil di daftarkan, Silahkan Login');window.location='../index.php';</script>";
        }else{
            echo "Error:" . $sql . "<br>" . $this->conn->error;
        }

        $this->conn->close();
    }
}

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $user = new User($nama, $email, $password, $level);
    $user->register();
}
?>
