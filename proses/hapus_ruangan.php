<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM daftar_ruangan WHERE id = '$id'");
	header("location: ../view/tampil_daftar_ruangan.php?pesan=hapus_sukses");
 ?>