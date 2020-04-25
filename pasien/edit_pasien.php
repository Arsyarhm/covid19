<?php  
include '../koneksi.php';
include '../asset/header.php';
$id_pasien = $_GET['id_pasien'];
$sql = mysqli_query($kon, "SELECT * FROM pasien WHERE id_pasien=$id_pasien");

$query = "SELECT * FROM pasien  WHERE id_pasien=$id_pasien";
$res = mysqli_query($kon, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pasien</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-pencil-ruler"></i>Edit Data Pasien</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-edit.php">
							<table class="table">
								<?php  
								while ($pasien = mysqli_fetch_assoc($sql)):
								?>
							<tr>
								<input type="hidden" name="id_pasien" value="<?php echo $pasien['id_pasien'];?>">
								<td>Nama</td>
								<td><input type="text" name="nama_pasien" value="<?php echo $pasien['nama_pasien'];?>" required></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><input type="text" name="alamat_pasien" value="<?php echo $pasien['alamat_pasien'];?>" required></td>
							</tr>
							<tr>
								<td>Telepon</td>
								<td><input type="text" name="telepon" value="<?php echo $pasien['telepon'];?>" required></td>
							</tr>
							<tr>
								<td>Suhu</td>
								<td><input type="text" name="suhu" value="<?php echo $pasien['suhu'];?>" required></td>
                            </tr>
                            <div class="form-group">
							<label for="datepicter">Tanggal Pemeriksaan</label>
							<input type="date" name="tgl_periksa" class="form-control" require>
						</div>

							<?php  
							endwhile;
							?>
							<!-- <tr>
								<td>Level</td>
								<td><input type="text" name="id_level" value="<?php echo $level['level'];?>" required></td>
							</tr> -->
							<tr>
								<td class="text-rigth" colspan="2">
									<center><a href="index_pasien.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a><center>
								</td>
								<td></td>
								<td><input type="submit" class="btn btn-warning" name="simpan" value="simpan"></td>
							</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<!-- <?php  
include '../asset/footer.php';
?> -->