<?php

require 'koneksi.php';

$rgs = query("SELECT * FROM seminar ORDER BY id ASC");


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="assets/reizkijihan.css">
<body>
<div class="main">
		<div class="card">
			<img src="jihan.jpg" height="200px" width="150px" class="tengah">
			<h4 class="collapsable" class="text-center">CONTACT ME AT</h4>
			<div class="isi">
				<i class="fas fa-map-marker-alt">Jalan pancawarga 25 no 11.</i>
				<br>
				<i class="fas fa-envelope-open-text">jihanmelani216@gmail.com</i><br>
				<i class="fas fa-phone-alt">082299157077</i><br>
				<i class="fab fa-github"><a href="https://github.com/reizkijihan?tab=repositories" target="_blank" onclick="alert('anda akan menuju ke homepage github')">reizkijihan</a></i><br>
				<i class="fab fa-twitter"><a href="https://twitter.com/reizkyjihan" target="_blank" onclick="alert('anda akan menuju ke twitter')">reizkyjihan</a></i>			</div><hr>
			<h4 class="collapsable">SKILLS</h4>
			<div class="skill">
				<p>
						<ul>
							<li>PHP</li>
							<li>MySQL</li>
							<li>NODE.JS</li>
							<li>GO</li>
							<li>C#</li>
						</ul>
					</p>
				</div><hr>
		<h4 class="collapsable"> INTEREST</h4>
				<div class="isi">
					<p>
						<ul>
							<li>WEB</li>
							<li>MOVIE</li>
							<li>BOOK</li>
							<li>TRADITIONAL DANCE</li>
						</ul>
					</p>
				</div><hr>
				<h4 class="collapsable"> INTERNSHIP</h4>
				<p>PT. Nemolab Nusa Infomedia (BackEnd Developer) </p>
			</div>
			<div class="card1">
				<h1 class="text-center">REIZKI JIHAN MELANI</h1>
			<h3 class="collapsable">PERSONAL PROFILE</h3> 
				<div class="isi"> <hr>
					<p>Current Gunadarma University student (3.34/4.00 GPA) and i take Information System major. I eager to learn about everything. Fast learner and hard worker. I have finished my scientific paper entitled "Pembuatan Situs Sanggar Nyi Ronggeng Menggunakan BOOTSTRAP dan PHP".</p>
				</div>

			<h3 class="collapsable">EDUCATION</h3><hr>
				<div class="isi">
					<p>Gunadarma University</p>
					<li>Joined UK TARI NUSANTARA GUNADARMA</li>
					<li>Joined HIMSI(HIMPUNAN MAHASISWA SISTEM INFROMASI)</li>
					<li>Public Relations of UK TARI NUSANTARA GUNADARMA</li>
					<li>Leader Of Research And Development Divisions HIMSI 2019</li>
					<li> Academic Staff Of Himsi 2018</li><br>
					<p>SMAN 53 JAKARTA</p>
					<li>Joined extracurricular SANCETY (Saman Dance) </li>
				</div>
			<h3 class="collapsable">Courses & Workshop</h3><hr>
				<div class="isi">
					<?php foreach ( $rgs as $row ) : ?>
						<p><li><?= $row['judul']; ?></p>
						<p><?= $row['penyelenggara']; ?></p>
						<p><?= $row['tahun']; ?> </p></li>
					
					<?php endforeach; ?>
				</div>
				<button  onclick="window.print()"> PRINT CV </button>
			</div>
		</div>
		<script src="reizkijihan.js">PRINTCV</script>
		</body>
</html>