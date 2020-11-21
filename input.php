<?php

require 'koneksi.php';

if(isset($_POST['submit']))
{
	if(tambahdata($_POST) > 0){
		echo "<script>alert('Data berhasil tersimpan');
		document.location.href = 'reizkijihan.php'; </script>";
	} else {
		echo "<script>alert('Data gagal disimpan');
		document.location.href = 'input.php'; </script>";
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Workshop/Courses</title>
    <link rel="stylesheet" type="text/css" href="assets/input.css">
</head>
<body>

<div class="regist">
<form action="" method="post">

	<div class="form">
		<h2 type="text-center">Courses & Workshop</h2>
		<input type="text" name="name" class="form-control" id="name" required placeholder="Masukkan Judul Courses/Workshop">
		<br>
		<input type="text" name="penyelenggara" class="form-control" id="penyelenggara" required placeholder="Masukkan Nama Penyelenggara">
		<br>
		<input type="text" name="tahun" id="tahun" class="form-control"  required placeholder="Masukkan Tahun Anda Mengikutinya"><br>
		<input type="submit" value="Submit" name="submit">
	</div>
</form>
</div>
</body>
</html>

