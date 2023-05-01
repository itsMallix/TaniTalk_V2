<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <title>TaniTalk</title>
</head>
<body>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=='gagal'){
            echo "<div class='alert'>Username dan Password Salah !</div>";
        }
    }
    ?>

    <div class="box">
        <div class="formBox">
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
        </div>
        <div class="formBoxBox">
            <h1>FORM SIGN UP</h1>
            <form action="controller/signup.php" method="post">
                <label>Nama</label>
                <input type="text" name="nama" class="formLogin" placeholder="Masukkan Nama" required="required">

                <label>Email</label>
                <input type="text" name="email" class="formLogin" placeholder="Masukkan Email" required="required">
    
                <label>Password</label>
                <input type="password" name="password" class="formLogin" placeholder="Masukkan Password" required="required">
    
                <label>Level</label>
                <input type="text" name="level" class="formLogin" placeholder="petani atau pengelola" required="required">

                <input type="submit" class="loginBtn" value="Login" name="submit">
                <p>Sudah Punya akun?<a href="login.php">Log In</a></p>
            </form>
        </div>
    </div>
</body>
</html>

<style>
    p{
        text-align: center;
    }
    label{
        color: #8D990D;
    }
    h1{
        margin-left: 140px;
    }
    .formBox{
        float: left;
    }
    .formBoxBox{
        float: right;
        box-sizing: border-box;
        width: 500px;
    }
    body{
        background: url('assets/login_regis_bg.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
         -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        overflow: hidden;

    }
    .textLogin{
        text-align: center;
        text-transform: uppercase;
    }

    .box{
        width: 80%;
        height: 500px;
        /* position: absolute; */
        background: url('assets/pop.png')no-repeat center center fixed;
        /* margin: 80px auto; */
        /* padding: 30px 20px; */
        box-shadow: 0 0 100px 4px #d6d6d6;
    }

    label{
        font-size: 14pt;
    }

    .formLogin{
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 20px;
        border-radius: 15px;
        border: none;
        background-color: #D9D9D9;
        height: 45px;
    }

    .loginBtn{
        background: #2aa7e2;
        color: white;
        font-size: 11pt;
        width: 100%;
        border: none;
        border-radius: 15px;
        padding: 10px 20px;
        background-color: #6CBB08;
        height: 45px;

    }

    .alert{
        background: #e44e4e;
        color: white;
        padding: 10px;
        text-align: center;
        border: 1px solid #b32929;
    }
</style>