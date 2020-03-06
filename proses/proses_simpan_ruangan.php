<?php 
	include 'koneksi.php';

	$nama = $_POST['nama_ruangan'];
	$kelas = $_POST['kelas'];
	$no = $_POST['no'];
	
	$query = "INSERT INTO daftar_ruangan VALUES('','$kelas','$nama','$no')";
	$sql = mysqli_query($koneksi,$query);
	
		if($sql){
			header("location: ../view/tampil_daftar_ruangan.php?pesan=tambah_sukses");
		}
		else{
			header("location: ../view/tampil_daftar_ruangan.php?pesan=tambah_gagal");
		}
 ?>