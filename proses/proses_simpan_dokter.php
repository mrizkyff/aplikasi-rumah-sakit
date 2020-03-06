<?php 
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$telp = $_POST['telp'];
	$spesialis = $_POST['spesialis'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$kota = $_POST['kota'];
	$tlahir = $_POST['tlahir'];
	$tanggal = date("Y-m-d H:i:s");

	// rename nama foto dengan menambah tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;

	// set path folder tempat upload
	$path = "../foto/pasien/".$fotobaru;

	// proses upload
	if(move_uploaded_file($tmp, $path)){
		$query = "INSERT INTO daftar_dokter VALUES('','$nama','$nip','$spesialis','$fotobaru','$telp','$jenis_kelamin','$tanggal')";
		$sql = mysqli_query($koneksi,$query);
		if($sql){
			header("location: ../view/tampil_daftar_dokter.php?pesan=tambah_sukses");
		}
		else{
			header("location: ../view/tampil_daftar_dokter.php?pesan=tambah_gagal");
		}
	}
 ?>