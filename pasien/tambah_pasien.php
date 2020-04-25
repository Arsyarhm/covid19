<?php 
include '../asset/header.php';
?>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data Pasien</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses.php">
							<div class="form-group">
								<label for="nama_pasien">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Lengkap">
							</div>						
							<div class="form-group">
								<label for="alamat_pasien">Alamat</label>
								<input type="text" class="form-control" name="alamat_pasien"id="alamat_pasien" placeholder="Masukkan Alamat Pasien">
								<small class="form-text text-muted">Contoh: Jl. Semangka</small>
							</div>
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<input type="text" class="form-control" name="jenis_kelamin"id="jenis_kelamin" placeholder="Masukkan jenis_kelamin">
								<small class="form-text text-muted">Contoh:Pria / Wanita</small>
							</div>
							<div class="form-group">
								<label for="suhu">Suhu</label>
								<input type="text" class="form-control" name="suhu"id="suhu" placeholder="Masukkan Suhu Pasien"> 
                            </div>
                            <div class="form-group">
								<label for="datepicter">Tanggal Pemeriksaan</label>
								<input type="date" name="tgl_periksa" class="form-control" require>
							</div>
							<div class="form-group">
								<label for="telepon">No.Telepon</label>
								<input type="text" class="form-control" name="telepon"id="telepon" placeholder="Masukkan No.Telepon">
								<small class="form-text text-muted">Contoh:111-222-3333</small>
							</div>
							<tr>
								<td class="text-rigth" colspan="2">
									<a href="index_pasien.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>
								</td>
							</tr>
							
							<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- <?php 
include '../asset/footer.php';
?> -->