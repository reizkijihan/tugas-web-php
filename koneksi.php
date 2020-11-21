<?php
//koneksi kedatabase
$koneksi = mysqli_connect("localhost", "root", "", "tugasweb");
function query ($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$row = [];
	while ( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambahdata($data) {
	global $koneksi;

	$name = (stripslashes($data['name']));
	$penyelenggara = ($data['penyelenggara']);
	$tahun = ($data['tahun']);

	//input kedalam database
	mysqli_query($koneksi, "INSERT INTO seminar VALUES('', '$name', '$penyelenggara', '$tahun')");
	return mysqli_affected_rows($koneksi);
}
?>