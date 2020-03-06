<?php 
	include 'koneksi.php';
	$dokter = $_POST['dokter'];
	$pasien = $_POST['pasien'];
	$ruangan = $_POST['ruangan'];

	$query_pasien = mysqli_query($koneksi, "SELECT * FROM daftar_pasien where id='$pasien'");
	$query_dokter = mysqli_query($koneksi, "SELECT * FROM daftar_dokter where id='$dokter'");
	$query_ruangan = mysqli_query($koneksi, "SELECT * FROM daftar_ruangan where id='$ruangan'");
	$hasil_pasien = mysqli_fetch_array($query_pasien);
	$hasil_dokter = mysqli_fetch_array($query_dokter);
	$hasil_ruangan = mysqli_fetch_array($query_ruangan);

	$id_pasien = $hasil_pasien['id'];
	$nama_pasien = $hasil_pasien['nama'];
	$alamat = $hasil_pasien['alamat'];
	$telp = $hasil_pasien['telp'];
	$jenis_kelamin = $hasil_pasien['jenis_kelamin'];
	$gejala = $hasil_pasien['gejala'];
	$foto = $hasil_pasien['foto'];
	$kota = $hasil_pasien['kota'];
	$tlahir = $hasil_pasien['tlahir'];
	$reg_pasien = $hasil_pasien['reg'];
	$id_dokter = $hasil_dokter['id'];
	$nama_dokter = $hasil_dokter['nama'];
	$nip = $hasil_dokter['nip'];
	$spesialis = $hasil_dokter['spesialis'];
	$foto_dokter = $hasil_dokter['foto'];
	$telp_dokter = $hasil_dokter['telp'];
	$jenis_kelamin_dokter = $hasil_dokter['jenis_kelamin'];
	$reg_dokter = $hasil_dokter['reg'];
	$id_ruangan = $hasil_ruangan['id'];
	$kelas = $hasil_ruangan['kelas'];
	$nama_ruangan = $hasil_ruangan['nama_ruangan'];
	$no_ruangan = $hasil_ruangan['no_ruangan'];

	$query = mysqli_query($koneksi, "INSERT INTO daftar_rawatInap values('','$id_pasien','$nama_pasien','$alamat','$telp','$jenis_kelamin','$gejala','$foto','$kota','$tlahir','$reg_pasien','$id_dokter','$nama_dokter','$nip','$spesialis','$foto_dokter','$telp_dokter','$jenis_kelamin_dokter','$reg_dokter','$id_ruangan','$nama_ruangan','$kelas','$no_ruangan')");
	if($query){
		header("location: ../view/tampil_rawatInap.php");

	}
	else{
		echo "tidak sukses";
	}
 ?>