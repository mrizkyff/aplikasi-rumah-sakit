<?php 
	include 'koneksi.php';

	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$gejala = $_POST['gejala'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$tanggal = date("Y-m-d H:i:s");

	// rename nama foto dengan menambah tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;

	// set path folder tempat upload
	$path = "../foto/pasien/".$fotobaru;

	// proses upload
	if(move_uploaded_file($tmp, $path)){
		$query = "UPDATE daftar_pasien SET alamat='$alamat', telp='$telp', gejala='$gejala', foto='$fotobaru', reg='$tanggal' ";
		$sql = mysqli_query($koneksi,$query);
		if($sql){
			header("location: ../view/tampil_daftar_pasien.php?pesan=update_sukses");
		}
		else{
			header("location: ../view/tampil_daftar_pasien.php?pesan=update_gagal");
		}
	}
 ?>