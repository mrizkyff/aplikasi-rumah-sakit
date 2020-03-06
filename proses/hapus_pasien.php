<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM daftar_pasien WHERE id = '$id'");
	header("location: ../view/tampil_daftar_pasien.php?pesan=hapus_sukses");
 ?>