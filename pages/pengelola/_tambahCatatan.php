<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        include "../../controller/conn.php";

        if(isset($_POST['submit'])){
            $nama_pencatatan = $_POST['nama_pencatatan'];
            $data_pencatatan = $_POST['data_pencatatan'];

            $query = "INSERT INTO pencatatan_ (nama_pencatatan, data_pencatatan) VALUES ('$nama_pencatatan', '$data_pencatatan')";
            
            if(empty($nama_pencatatan) || empty($data_pencatatan)){
                echo "<script type='text/javascript'>alert('Field tidak boleh kosong');window.location='_tambahCatatan.php';</script>";
            }elseif(mysqli_query($conn,$query)){
                echo "<script type='text/javascript'>alert('Data berhasil ditambahkan');window.location='_tambahCatatan.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('Gagal');window.location='_tambahCatatan.php';</script>";
            }
        }

        
    ?>
    <div class="container">
        <div class="content">
            <form action="" method="post">
                <h2>TAMBAH DATA PENCATATAN</h2>
                <br><br>
                <label>Nama Pencatatan</label><br>
                <input type="text" name="nama_pencatatan" id="" placeholder="nama pencatatan">
                <br><br>
                <label>Data Pencatatan</label><br>
                <input type="text" name="data_pencatatan" id="" placeholder="data pencatatan">
                <br><br>
                <button class="submit" type="submit" name="submit">Submit</button><br>
            </form>
        </div>
    </div>
</body>
</html>

<style>
h2{
    text-align: center;
}

input{
    width: 90%;
    margin: 5px;
    border: 1px solid;
    border-radius: 5px;
    padding: 10px 10px;
    font-size: 11pt;
}
.submit{
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 5px;
    padding: 10px 20px;
    border-bottom: 5px;
    width: 100%;
    background-color: #1082EB;
    color: white;
}

.content{
    display: flex;
    justify-content: center;
    width: 100%;
    height: 400px;
    padding: 30px 30px;
    border-radius: 5px;
    box-shadow: 0px 10px 20px 0px;
    border-radius: 20px;
    background-color: #8A8A8A;
}
body{
    display: flex;
    justify-content: center;
    margin-top: 50px;
    background-color: #E9E9E9;
    color: white;
}
</style>