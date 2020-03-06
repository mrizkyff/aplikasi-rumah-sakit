<?php 
include '../proses/koneksi.php';
 ?>
 <br>
 <center>
 	

<table class="table table-bordered" style="width: 100%; background-color: #d8f3fa;">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center" style="width: 50px">ID Rawat Inap</th>
		<th class="text-center" style="width: 50px">ID Pasien</th>
		<th class="text-center" style="width: 200px;">Nama Pasien</th>
		<th class="text-center" style="width: 300px;">Alamat Pasien</th>
		<th class="text-center">No. Telp</th>
		<th class="text-center">Jenis Kelamin Pasien</th>
		<th class="text-center" style="width: 300px;">Gejala</th>
		<th class="text-center" style="width: 150px">Foto Pasien</th>
		<th colspan="2" class="text-center">Tempat Tanggal Lahir</th>
		<th class="text-center">Terdaftar</th>
		<th class="text-center">ID Dokter</th>
		<th class="text-center">Nama Dokter</th>
		<th class="text-center">NIP</th>
		<th class="text-center">Spesialis</th>
		<th class="text-center">Foto Dokter</th>
		<th class="text-center">Telp Dokter</th>
		<th class="text-center">Jenis Kelamin</th>
		<th class="text-center">ID Ruangan</th>
		<th class="text-center">Nama Ruangan</th>
		<th class="text-center">Kelas</th>
		<th class="text-center">No. Ruangan</th>

		<th colspan="2" class="text-center">Opsi</th>
	</tr>
	<?php 
		$nomor = 0;
		$d = mysqli_query($koneksi,"SELECT * FROM daftar_rawatInap");
		if(mysqli_num_rows($d)>0){

		while($data=mysqli_fetch_array($d)){
			$nomor++;
			?>
	<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['id_pasien'] ?></td>
			<td><?php echo $data['nama_pasien'] ?></td>
			<td><?php echo $data['alamat'] ?></td>
			<td><?php echo $data['telp'] ?></td>
			<td><?php echo $data['jenis_kelamin_pasien'] ?></td>
			<td><?php echo $data['gejala'] ?></td>
			<td><img src="../foto/pasien/<?php echo $data['foto_pasien'] ?>" alt="" style="width: 100px;"></td>
			<td><?php echo $data['kota'] ?></td>
			<td><?php echo $data['tlahir'] ?></td>
			<td><?php echo $data['reg_pasien'] ?></td>
			<td><?php echo $data['id_dokter'] ?></td>
			<td><?php echo $data['nama_dokter'] ?></td>
			<td><?php echo $data['nip'] ?></td>
			<td><?php echo $data['spesialis'] ?></td>
			<td><img src="../foto/pasien/<?php echo $data['foto_dokter'] ?>" alt="" style="width: 100px;"></td>
			<td><?php echo $data['telp_dokter'] ?></td>
			<td><?php echo $data['jenis_kelamin_dokter'] ?></td>
			<td><?php echo $data['reg_dokter'] ?></td>
			<td><?php echo $data['id_ruangan'] ?></td>
			<td><?php echo $data['nama-ruangan'] ?></td>
			<td><?php echo $data['kelas'] ?></td>
			<td><?php echo $data['no_ruangan'] ?></td>
			<td><a href="../proses/form_edit.php?id=<?php echo $data['id'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#editPasien" style="width: 80px;">Edit</a></td>
			<td><a href="../proses/hapus_pasien.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" style="width: 80px;">Hapus</a></td>

			<!-- modal tambah -->
			<!-- Modal -->
			<div class="modal fade" id="editPasien" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-scrollable" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title">Tambah Pasien</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body text-left">
			       <h3>Form EDIT Pasien</h3>
			       <form action="../proses/proses_update_pasien.php" method="post" enctype="multipart/form-data">
				       	<div class="form-group">
				       		<label for="id">ID Pasien</label>
				       		<input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>" disabled>
				       	</div>
			       		<div class="form-group" class="text-left">
			       			<label for="nama">Nama</label>
			       			<input type="text" class="form-control" maxlength="25" name="nama" value="<?php echo $data['nama'] ?>" disabled>
			       		</div>
			       		<div class="form-group">
			       			<label for="alamat">Alamat</label>
			       			<input type="text" class="form-control" maxlength="100" name="alamat" value="<?php echo $data['alamat'] ?>">
			       		</div>
			       		<div class="form-group">
			       			<label for="telp">No. Telp</label>
			       			<input type="text" class="form-control" maxlength="15" name="telp" value="<?php echo $data['telp'] ?>">
			       		</div>
			       		<div class="form-group">
			       			<label for="gejala">Gejala</label>
			       			<textarea name="gejala" id="gejala" cols="30" rows="3" class="form-control"><?php echo $data['gejala'] ?></textarea>
			       		</div>
			       		<div class="form-group">
			       			<label for="jenis_kelamin">Jenis Kelamin</label>
				       		<input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" disabled class="form-control">
			       		</div>
			       		<div class="form-group">
			       			<label for="foto">Foto</label>
			       			<input type="file" class="form-control-file" name="foto">
			       		</div>
			       		<div class="form-group">
			       			<label for="tempat">Kota Lahir</label>
			       			<input type="text" name="kota" class="form-control" value="<?php echo $data['kota'] ?>" disabled>
			       		</div>
			       		<div class="form-group">
			       			<label for="tlahir">Tanggal Lahir</label>
			       			<input type="text" name="tlahir"  class="form-control" value="<?php echo $data['tlahir'] ?>" disabled>
			       		</div>
			        <button class="btn btn-primary" type="submit" style="float: right;">Update</button>
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
