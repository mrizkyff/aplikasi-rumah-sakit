<?php 
include '../proses/koneksi.php';
?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <title>Daftar Ruangan</title>
  </head>
  <body style="background-color: lightblue;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<a class="nav-item nav-link disabled" href="#">Rumah Sakit Sumber Waras</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="../index.php?pesan=logout">Logout<span class="sr-only"></span></a>
	     <a class="nav-item nav-link active" data-toggle="modal" data-target="#contact" href="#">Kontak</a>
	    </div>
	  </div>
	</nav>
  	<?php 
  	if(isset($_GET['pesan'])){
  	if($_GET['pesan']=="login_berhasil"){
          echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Login Berhasil!</b></div>';
    }
	else if($_GET['pesan']=="hapus_sukses"){
	  echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Data berhasil dihapus!</b></div>';
	}
	else if($_GET['pesan']=="tambah_sukses"){
	  echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Dokter Berhasil Ditambahkan!</b></div>';
	}
	else if($_GET['pesan']=="tambah_gagal"){
	  echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Dokter gagal ditambahkan!</b></div>';
	}
	else if($_GET['pesan']=="update_sukses"){
	  echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Data Dokter Berhasil Diupdate!</b></div>';
	}
	else if($_GET['pesan']=="update_gagal"){
	  echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Dokter gagal diupdate!</b></div>';
  	}
	}
  	 ?>
  
		<h1 class="text-center" style="margin-top: 50px;">Daftar Ruangan</h1>
		<br>
		<br>
		
	<!-- awal card -->
	<center>
	<div class="card text-center" style="width: 97%;">
	  <div class="card-header">
	    <ul class="nav nav-tabs card-header-tabs">
	      <li class="nav-item">
	        <a class="nav-link" href="tampil_daftar_pasien.php">Daftar Pasien</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="tampil_daftar_dokter.php">Daftar Dokter</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link active" href="tampil_daftar_ruangan.php">Daftar Ruangan</a>
	      </li>
	      <li class="nav-link">
	      	<a class="nav-link" href="tampil_rawatInap.php">Daftar Rawat Inap</a>
	      </li>
	    </ul>
	  </div>
	  <div class="card-body text-left">
			<table style="width: 100%;">
				<tr>
					<td>	
					<button class="btn btn-success" style="float: right;right: 0;" type="button" data-toggle="modal" data-target="#tambahRuangan">Tambah Ruangan</button>
					</td>
				</tr>
			</table>
		    <?php 
				include 'tabel_daftar_ruangan.php';
			 ?>
		<!-- akhir komom dan row -->
	  </div>
	</div>
	</center>
	<!-- ahir card -->






	<!-- modal tambah -->
	<!-- Modal -->
	<div class="modal fade" id="tambahRuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Tambah Ruangan</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       <h3>Form Input Ruangan</h3>
	       <form action="../proses/proses_simpan_ruangan.php" method="post" enctype="multipart/form-data">
	       		<div class="form-group">
	       			<label for="kelas">Kelas</label>
	       			<select class="form-control" name="kelas">
	       				<option>Pilih..</option>
	       				<option value="1">1</option>
	       				<option value="2">2</option>
	       				<option value="3">3</option>
	       				<option value="VIP">VIP</option>
	       				<option value="VVIP">VVIP</option>
	       			</select>
	       		</div>
	       		<div class="form-group">
	       			<label for="nama_ruangan">Nama Ruangan</label>
	       			<select name="nama_ruangan" class="form-control">
	       				<option value="Mawar">Mawar</option>
	       				<option value="Melati">Melati</option>
	       				<option value="Cendrawasih">Cendrawasih</option>
	       				<option value="Jatayu">Jatayu</option>
	       				<option value="Bougenvile">Bougenvile</option>
	       				<option value="Tulip">Tulip</option>
	       			</select>
	       			
	       		</div>
	       		<div class="form-group">
	       			<label for="no">Nomor Ruangan</label>
	       			<select name="no" class="form-control">
	       				<option value="101">101</option>
	       				<option value="102">102</option>
	       				<option value="103">103</option>
	       				<option value="104">104</option>
	       			</select>
	       			
	       		</div>
	        <button class="btn btn-primary" type="submit" style="float: right;">Tambah</button>
	       </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float: left;">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- akhir modal tambah -->
	<!-- Modal -->
	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Kontak Teknis</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       <p>Jika ada kesalahan teknis hubungi kami telp 024.7463249</p>
	       	
	       
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="float: left;">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- akhir modal tambah -->

	<p class="text-center" style="position: fixed;bottom: 0;width: 100%;">Copyright &copy <a href="http://instagram.com/erilyasb">Erilya Salsabila</a> &<a href="http://instagram.com/get54_">Ghaitsa Ardelia Rosyida</a> |Universitas Dian Nuswantoro</p>
    <!-- Optional JavaScript -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>