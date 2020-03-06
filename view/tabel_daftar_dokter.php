<?php 
include '../proses/koneksi.php';
 ?>
 <br>
 <center>
 	

<table class="table table-bordered" style="width: 100%; background-color: #d8f3fa;">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center" style="width: 50px">ID Dokter</th>
		<th class="text-center" style="width: 200px;">Nama</th>
		<th class="text-center" style="width: 300px;">NIP</th>
		<th class="text-center">No. Telp</th>
		<th class="text-center">Spesialis</th>
		<th class="text-center" style="width: 170px">Jenis Kelamin</th>
		<th class="text-center" style="width: 150px">Foto</th>
		<th class="text-center">Terdaftar</th>
		<th colspan="2" class="text-center">Opsi</th>
	</tr>
	<?php 
		$nomor = 0;
		$d = mysqli_query($koneksi,"SELECT * FROM daftar_dokter");
		if(mysqli_num_rows($d)>0){

		while($data=mysqli_fetch_array($d)){
			$nomor++;
			?>
	<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['nama'] ?></td>
			<td><?php echo $data['nip'] ?></td>
			<td><?php echo $data['telp'] ?></td>
			<td><?php echo $data['spesialis'] ?></td>
			<td><?php echo $data['jenis_kelamin'] ?></td>
			<td><img src="../foto/pasien/<?php echo $data['foto'] ?>" alt="" style="width: 100px;"></td>
			<td><?php echo $data['reg'] ?></td>
			<td><a href="../proses/form_edit.php?id=<?php echo $data['id'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#editDokter" style="width: 80px;">Edit</a></td>
			<td><a href="../proses/hapus_dokter.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" style="width: 80px;">Hapus</a></td>

			<!-- modal tambah -->
			<!-- Modal -->
			<div class="modal fade" id="editDokter" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-scrollable" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Update Dokter</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body text-left">
			       <h3>Form Update Dokter</h3>
			       <form action="../proses/proses_update_dokter.php" method="post" enctype="multipart/form-data">
	       		<div class="form-group">
	       			<label for="nama">Nama</label>
	       			<input type="text" class="form-control" maxlength="25" name="nama" placeholder="Nama Pasien" disabled>
	       		</div>
	       		<div class="form-group">
	       			<label for="nip">NIP</label>
	       			<input type="text" class="form-control" maxlength="100" name="nip" placeholder="Nomer Induk Pegawawai Dokter" disabled="">
	       		</div>
	       		<div class="form-group">
	       			<label for="telp">No. Telp</label>
	       			<input type="text" class="form-control" maxlength="15" name="telp" value="<?php echo $data['telp'] ?>">
	       		</div>
	       		<div class="form-group">
	       			<label for="spesialis">Spesialis</label>
	       			<input type="text" class="form-control" name="spesialis" value="<?php echo $data['spesialis'] ?>" disabled>
	       		</div>
	       		<div class="form-group">
	       			<label for="jenis_kelamin">Jenis Kelamin</label>
		       		<input type="text" class="form-control" name="spesialis" value="<?php echo $data['jenis_kelamin'] ?>" disabled>
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
