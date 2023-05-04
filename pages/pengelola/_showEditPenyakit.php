<!DOCTYPE html>
<html>
<head>
	<title>Form Penyakit</title>
</head>
<body>
    <?php
		include "../../controller/conn.php";
		$sql = "select * from katalog_penyakit";
		$id = $_GET['id'];
        $hasil = $conn->query($sql);
		$data = $hasil->fetch_assoc();
		
		if(isseT($_POST['submit'])){
			
			$id_ = $_POST['id'];
			$judul = $_POST['nama_penyakit'];
			$jenis = $_POST['jenis_penyakit'];
			$deskripsi = $_POST['deskripsi'];
			$nama_file = $_FILES['gambar']['name'];
            $tmp_file = $_FILES['gambar']['tmp_name'];
			$gambar = $_POST['gambar']; 
			// $edit = date("Y-m-d");

			if($_FILES['gambar']['name'] != ''){
				$lokasi = "../assets/upload_penyakit/" . $nama_file;
				// $gambar = $lokasi . $_FILES['gambar']['nama'];
				move_uploaded_file($tmp_file, $lokasi);
			}

			$querry = "update katalog_penyakit set nama_penyakit='$judul', jenis_penyakit='$jenis', deskripsi='$deskripsi', pengelola=1, gambar='$nama_file' where id='$id'";
			// if($gambar != ''){
			// 	$querry .= ", gambar='$nama_file'";
			// }
			// $querry .= " where id='$id_'";

			if(mysqli_query($conn, $querry)){
				echo "berhasil";
				header("location:_katalogPenyakitPengelola.php");
			}
		}
		// ../../controller/update.php
    ?>
	<h1>Edit Penyakit</h1>
	<form action="#" method="post" enctype="multipart/form-data" onsubmit="return confirm('Simpan perubahan?');">
		<input type="hidden" id="id_penyakit" name="id" value="<?php echo $data['id'] ?>">

		<label for="nama_penyakit">Nama Penyakit</label>
		<input type="text" id="nama_penyakit" name="nama_penyakit" value="<?= $data['nama_penyakit']?>">
		
        <label for="jenis_penyakit">Jenis Penyakit</label>
		<input type="text" id="jenis_penyakit" name="jenis_penyakit" value="<?= $data['jenis_penyakit']?>">

		<label for="deskripsi_penyakit">Deskripsi Penyakit</label>
		<textarea id="deskripsi_penyakit" name="deskripsi"><?= $data['deskripsi']?></textarea>

		<label for="gambar_penyakit">Gambar Penyakit</label>
		<!-- <div class="image-preview">
			<img id="gambar_preview" src="">
		    <p>Pilih gambar</p>
	    </div> -->
	    <input type="file" id="gambar_penyakit" name="gambar" onchange="previewImage();" required>

	    <input type="submit" name="submit" value="Simpan">
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