<!DOCTYPE html>
<html>
<head>
  <title>Formulir Pembayaran</title>
  <?php
        include "../../controller/conn.php";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            include "../../controller/conn.php";
        
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $nohp = $_POST['nohp'];
            $tanggal = $_POST['tanggal'];
            $jumlah = $_POST['jumlah'];
            $nama_file = $_FILES['bukti']['name'];
            $tmp_file = $_FILES['bukti']['tmp_name'];
        
            // Validasi jika ada field yang kosong
            if (empty($kode) || empty($nama) || empty($email) || empty($nohp) || empty($tanggal) || empty($jumlah) || empty($nama_file)) {
              echo "<script>alert('Field tidak boleh kosong');</script>";
            } else {
              // Upload gambar ke folder tujuan
              $upload_dir = "../../assets/upload_pembayaran/";
              $file_path = $upload_dir . $nama_file;
              move_uploaded_file($tmp_file, $file_path);
        
              // Simpan data ke database
              $query = "INSERT INTO pembayaran (nama, email, nohp, tanggal, jumlah, bukti, kode) VALUES ('$nama', '$email', '$nohp', '$tanggal', '$jumlah', '$nama_file', '$kode')";
        
              if (mysqli_query($conn, $query)) {
                echo "<script>alert('Data berhasil ditambahkan');window.location='_detailPenyakit.php';</script>";
                // Redirect ke halaman lain jika diperlukan
                // header("Location: halaman_lain.php");
              } else {
                echo "<script>alert('Gagal menyimpan data');</script>";
              }
            }
          }

        
    ?>
</head>
<body>
  <div class="container">
    <h1>Formulir Pembayaran</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="payment-code">Kode Pembayaran</label>
        <input type="text" id="payment-code" name="kode" placeholder="Masukkan kode pembayaran" required>
      </div>
      <div class="form-group">
        <label for="full-name">Nama Lengkap</label>
        <input type="text" id="full-name" name="nama" placeholder="Masukkan nama lengkap Anda" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
      </div>
      <div class="form-group">
        <label for="phone">Nomor HP</label>
        <input type="tel" id="phone" name="nohp" placeholder="Masukkan nomor HP Anda" required>
      </div>
      <div class="form-group">
        <label for="payment-date">Tanggal Pembayaran</label>
        <input type="date" id="payment-date" name="tanggal" required>
      </div>
      <div class="form-group">
        <label for="payment-amount">Jumlah Pembayaran</label>
        <input type="number" id="payment-amount" name="jumlah" placeholder="Masukkan jumlah pembayaran" required>
      </div>
      <div class="form-group">
        <label for="payment-proof">Bukti Pembayaran</label>
        <input type="file" id="payment-proof" name="bukti" accept="image/*" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Bayar">
      </div>
    </form>
  </div>
</body>
</html>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px 20px 20px 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    .form-group input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>