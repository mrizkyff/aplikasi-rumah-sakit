<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM daftar_dokter WHERE id = '$id'");
	header("location: ../view/tampil_daftar_dokter.php?pesan=hapus_sukses");
 ?>