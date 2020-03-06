<?php 
include '../proses/koneksi.php';
 ?>
 <br>
 <center>
 	

<table class="table table-bordered" style="width: 100%; background-color: #d8f3fa;">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center" style="width: 50px">ID Ruangan</th>
		<th class="text-center" style="width: 200px;">Kelas</th>
		<th class="text-center" style="width: 300px;">Nama Ruangan</th>
		<th class="class-center" style="width: 50px;">Nomo Ruangan</th>
		<th colspan="2" class="text-center">Opsi</th>
	</tr>
	<?php 
		$nomor = 0;
		$d = mysqli_query($koneksi,"SELECT * FROM daftar_ruangan");
		if(mysqli_num_rows($d)>0){

		while($data=mysqli_fetch_array($d)){
			$nomor++;
			?>
	<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['kelas'] ?></td>
			<td><?php echo $data['nama_ruangan'] ?></td>
			<td><?php echo $data['no_ruangan'] ?></td>
			<td><a href="../proses/form_edit.php?id=<?php echo $data['id'] ?>" class="btn btn-primary disabled" data-toggle="modal" data-target="#editRuangan" style="width: 80px;" disabled>Edit</a></td>
			<td><a href="../proses/hapus_ruangan.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" style="width: 80px;">Hapus</a></td>

			<!-- modal tambah -->
			<!-- Modal -->
			<div class="modal fade" id="editRuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-scrollable" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Update Ruangan</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body text-left">
			       <h3>Form Update Ruangan</h3>
			       <form action="../proses/proses_update_dokter.php" method="post" enctype="multipart/form-data">
	       		<div class="form-group">
	       			<label for="id">ID</label>
	       			<input type="text" class="form-control" maxlength="25" name="id" placeholder="ID" disabled>
	       		</div>
	       		<div class="form-group">
	       			<label for="kelas">Kelas</label>
	       			<input type="text" class="form-control" maxlength="100" name="kelas" placeholder="Kelas" disabled="">
	       		</div>
	       		<div class="form-group">
	       			<label for="nama_pasien">Nama Pasien</label>
	       			<input type="text" class="form-control" maxlength="15" name="nama_pasien"placeholder="nama_pasien" disabled="">
	       		</div>
	       		<div class="form-group">
	       			<label for="nama_ruangan">Nama Ruangan</label>
	       			<input type="text" class="form-control" name="nama_ruangan" placeholder="nama_ruangan" disabled="">
	       		</div>
	       		<div class="form-group">
	       			<label for="foto">Foto</label>
	       			<input type="file" class="form-control-file" name="foto">
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
			<?php

		}
		}
	 ?>
		
	</tr>
</table>
 </center>
