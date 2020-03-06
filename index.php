<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Sistem Informasi Rumah Sakit</title>
  </head>
  <body style="background-color: lightblue;">
  <?php
  if(isset($_GET['pesan'])){	
  if($_GET['pesan']=="login_gagal"){
          echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Login Gagal!</b> Username atau Password salah.</div>';
        }
   else if($_GET['pesan']=="logout"){
          echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Anda telah Logout!</b></div>';
        }
  }
   ?>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="nav-item nav-link disabled" href="#">Rumah Sakit Sumber Waras</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="#">Login<span class="sr-only"></span></a>
	      <a class="nav-item nav-link active" data-toggle="modal" data-target="#contact" href="#">Kontak</a>
	    </div>
	  </div>
	</nav>
 
 	<br>
 	<br>
 	<br>
 	<br>
	<div class="container" style="width: 500px; height: 500px; background-color: white; box-shadow: 5px 5px 10px grey; border-radius: 8px;">
		

	<br>
	<br>
	<h1 class="text-center">Login</h1>
	<h5 class="text-center">Masuk sebagai Admin</h5>
	<br>
	<br>
	<form action="proses/proses_login.php" method="post">
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
		<br>
		<center>
		<button class="btn btn-primary" style="width: 100%;">Masuk</button>
		<center>
	</form>
	</div>

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



	<p class="text-center" style="position: fixed;bottom: 0;width: 100%;">Copyright &copy <a href="http://instagram.com/erilyasb">Erilya Salsabila</a> & <a href="http://instagram.com/get54_">Ghaitsa Ardelia Rosyida</a>| Universita Dian Nuswantoro</p>
    <!-- Optional JavaScript -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>