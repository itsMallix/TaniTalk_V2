<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaniTalk</title>
</head>
<body>
    <div class="navbar">
        <a href="#" class="logo"><img src="assets/logo.png" alt="TaniTalk"></a>
        <div class="signup">
            <a href="signup.php">Sign Up</a>
        </div>
        <div class="login">
            <a href="login.php">Login</a>
        </div>
    </div>
    <div class="title">
    </div>
</body>
</html>

<style>
    /* Style untuk navbar */
    .navbar {
        overflow: hidden;
        /* background-color: #333; */
        position: fixed;
        top: 0;
        width: 100%;
        margin-top: 20px;
    }

    /* Style untuk logo */
    .navbar .logo img{
        float: left;
        width: 7%;

    }

    /* Style untuk tombol Login dan Sign Up */
    .navbar .login, .navbar .signup {
        margin-top: 25px;
        margin-right: 20px;
        float: right;
        padding: 5px;
    }

    .navbar .login a {
        color: white;
        text-decoration: none;
        padding: 15px 15px;
        border-radius: 3px;
        background-color: #6CBB08;
    }
    .navbar .signup a{
        color: white;
        text-decoration: none;
        padding: 15px 15px;
        border-radius: 3px;
        background-color: #6CBB08;
        margin-right: 130px;
    }

    .navbar .login a:hover, .navbar .signup a:hover {
        background-color: grey;
        color: white;
    }
    body{
        background: url('assets/landing_bg.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
         -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
  </style>