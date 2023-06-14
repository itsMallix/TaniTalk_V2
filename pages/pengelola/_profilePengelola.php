<!DOCTYPE html>
<html>
<head>
	<title>Form Penyakit</title>
</head>
<body>
    <?php
		include "../../controller/conn.php";
		$sql = "select * from user";
		$id = 2;
        $hasil = $conn->query($sql);
		$data = $hasil->fetch_assoc();
		
		if(isseT($_POST['submit'])){
			
			$id_ = $_POST['id'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$alamat = $_POST['alamat'];
            $nohp = $_POST['nohp'];
			$foto = $_POST['foto']; 
			// $edit = date("Y-m-d");

			if($_FILES['foto']['name'] != ''){
				$lokasi = "../assets/upload_penyakit/" . $nama_file;
				// $gambar = $lokasi . $_FILES['gambar']['nama'];
				move_uploaded_file($tmp_file, $lokasi);
			}

			$querry = "update user set nama='$nama', email='$email', password='$password', alamat='$alamat', nohp='$nohp', foto='$foto' where id='$id'";
			// if($gambar != ''){
			// 	$querry .= ", gambar='$nama_file'";
			// }
			// $querry .= " where id='$id_'";

			if(mysqli_query($conn, $querry)){
                echo "<script type='text/javascript'>alert('Data berhasil di daftarkan, Silahkan Login');window.location='../index.php';</script>";
				header("location:_profilePengelola.php");
			}
		}
		// ../../controller/update.php
    ?>
	<h1>Profile</h1>
	<form action="#" method="post" enctype="multipart/form-data" onsubmit="return confirm('Simpan perubahan?');">
		<input type="hidden" id="id_penyakit" name="id" value="<?php echo $data['id'] ?>">

		<label for="nama">Nama</label>
		<input type="text" id="nama" name="nama" value="<?= $data['nama']?>">
		
        <label for="email">Email</label>
		<input type="text" id="email" name="email" value="<?= $data['email']?>">
		
        <label for="password">Password</label>
		<input type="text" id="password" name="password" value="<?= $data['password']?>">
        
        <label for="alamat">Alamat</label>
		<input type="text" id="alamat" name="alamat" value="<?= $data['alamat']?>">
        
        <label for="nohp">NoHP</label>
		<input type="text" id="nohp" name="nohp" value="<?= $data['nohp']?>">

	    <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>

<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		form {
			max-width: 600px;
			margin: 0 auto;
			background-color: #fff;
			padding: 30px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
			border-radius: 5px;
			margin-top: 50px;
		}

		input[type="text"], textarea {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 3px;
			margin-bottom: 20px;
			font-size: 16px;
			background-color: #f5f5f5;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		label {
			display: block;
			font-size: 16px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		textarea {
			height: 150px;
		}

		.image-preview {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 150px;
			margin-bottom: 20px;
			border: 2px dashed #ccc;
			position: relative;
		}

		.image-preview img {
			max-width: 100%;
			max-height: 100%;
			object-fit: contain;
			position: absolute;
		}

		.image-preview p {
			position: absolute;
			margin: 0;
			padding: 10px;
			background-color: #000;
			color: #fff;
			opacity: 0.7;
			transition: opacity 0.3s ease-in-out;
			font-size: 16px;
		}

		.image-preview:hover p {
			opacity: 1;
		}
	</style>