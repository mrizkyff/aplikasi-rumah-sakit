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

    <title>Daftar Pasien</title>
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
	  echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Pasien Berhasil Ditambahkan!</b></div>';
	}
	else if($_GET['pesan']=="tambah_gagal"){
	  echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Pasien gagal ditambahkan!</b></div>';
	}
	else if($_GET['pesan']=="update_sukses"){
	  echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Data Pasien Berhasil Diupdate!</b></div>';
	}
	else if($_GET['pesan']=="update_gagal"){
	  echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Pasien gagal ditambahkan!</b></div>';
  	}
	}
  	 ?>
  
		<h1 class="text-center" style="margin-top: 50px;">Daftar Pasien</h1>
		<br>
		<br>
		
	<!-- awal card -->
	<center>
	<div class="card text-center" style="width: 97%;">
	  <div class="card-header">
	    <ul class="nav nav-tabs card-header-tabs">
	      <li class="nav-item">
	        <a class="nav-link active" href="tampil_daftar_pasien.php">Daftar Pasien</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="tampil_daftar_dokter.php">Daftar Dokter</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="tampil_daftar_ruangan.php">Daftar Ruangan</a>
	      </li>
	      <li class="nav-item">
	      	<a class="nav-link" href="tampil_rawatInap.php">Daftar Rawat Inap</a>
	      </li>
	    </ul>
	  </div>
	  <div class="card-body text-left">
			<table style="width: 100%;">
				<tr>
					<td>	
					<button class="btn btn-success" style="float: right;right: 0;" type="button" data-toggle="modal" data-target="#tambahPasien">Tambah Pasien</button>
					</td>
				</tr>
			</table>
		    <?php 
				include 'tabel_daftar_pasien.php';
			 ?>
		<!-- akhir komom dan row -->
	  </div>
	</div>
	</center>
	<!-- ahir card -->






	<!-- modal tambah -->
	<!-- Modal -->
	<div class="modal fade" id="tambahPasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Tambah Pasien</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       <h3>Form Input Pasien</h3>
	       <form action="../proses/proses_simpan_pasien.php" method="post" enctype="multipart/form-data">
	       		<div class="form-group">
	       			<label for="nama">Nama</label>
	       			<input type="text" class="form-control" maxlength="25" name="nama" placeholder="Nama Pasien">
	       		</div>
	       		<div class="form-group">
	       			<label for="alamat">Alamat</label>
	       			<input type="text" class="form-control" maxlength="100" name="alamat" placeholder="Alamat Pasien">
	       		</div>
	       		<div class="form-group">
	       			<label for="telp">No. Telp</label>
	       			<input type="text" class="form-control" maxlength="15" name="telp" placeholder="No. Telp Pasien">
	       		</div>
	       		<div class="form-group">
	       			<label for="gejala">Gejala</label>
	       			<textarea name="gejala" id="gejala" cols="30" rows="3" class="form-control"></textarea>
	       		</div>
	       		<div class="form-group">
	       			<label for="jenis_kelamin">Jenis Kelamin</label>
		       		<select class="custom-select mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
				        <option selected>Pilih..</option>
				        <option value="Laki-Laki">Laki-Laki</option>
				        <option value="Perempuan">Perempuan</option>
				    </select>
	       		</div>
	       		<div class="form-group">
	       			<label for="foto">Foto</label>
	       			<input type="file" class="form-control-file" name="foto">
	       		</div>
	       		<div class="form-group">
	       			<label for="tempat">Kota Lahir</label>
	       			<input type="text" name="kota" placeholder="Kota lahir pasien" class="form-control">
	       		</div>
	       		<div class="form-group">
	       			<label for="tlahir">Tanggal Lahir</label>
	       			<input type="text" name="tlahir" placeholder="Tanggal Lahir Pasien" class="form-control">
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

	<p class="text-center" style="position: fixed;bottom: 0;width: 100%;">Copyright &copy <a href="http://instagram.com/erilyasb">Erilya Salsabila</a> & <a href="http://instagram.com/get54_">Ghaitsa Ardelia Rosdyida</a> | Universitas Dian Nuswantoro</p>
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