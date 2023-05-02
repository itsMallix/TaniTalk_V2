<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "_sidebarPengelola.php";
        include "_navbar.php";
        include "../../controller/conn.php";

        $sql = "select * from katalog_budidaya";
        $hasil = mysqli_query($conn,$sql);
        if(!$hasil){
            die("Query gagal: ". mysqli_error($conn));
        }
    ?>
    <br><br><br><br><br>
    <table border="1" width="50%">
        <?php
            echo "<tr><th>No</th><th>Nama Budidaya</th><th>Deskripsi</th><th>Gambar</th><th>Aksi</th></tr>";
            while($row = mysqli_fetch_assoc($hasil)){
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[judul]</td>
                    <td>$row[deskripsi]</td>
                    <td>$row[gambar]</td>
                    <td><a href='../../controller/hapus.php?id=$row[id]'>HAPUS</a></td>
                ";
            }
        ?>
    </table>
    </body>
</html>

<style>
.delete{
    padding: 20px 10px;
    background-color: grey;
    color: white;
    border-radius: 5px;
}
table{
    border: none;
    margin-left: 300px;
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color: black;
    width: 80%;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    border: none;
    background:#6CBB08;
    color:white;
    font-weight:bold;
    font-size:14px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    border: none;
    vertical-align:top;
    padding:5px 10px;
    /* border:1px solid #696969; */
}
/* Mengatur warna baris */
table tr {
    background: #BCBCBC;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#E9E9E9;
}
</style>