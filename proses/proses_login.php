<?php 
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE username = '$username' and password = '$password'");

	$cek = mysqli_num_rows($data);
	

	if($cek > 0){
		header("location: ../view/tampil_daftar_pasien.php?pesan=login_berhasil");
	}
	else{
		header("location: ../index.php?pesan=login_gagal");
	}
 ?>