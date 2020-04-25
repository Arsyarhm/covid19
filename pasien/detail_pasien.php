<?php  
include '../asset/header.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];
$sql = "SELECT * FROM pasien p WHERE id_pasien=$id_pasien";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Pasien</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Pasien</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
            <tr>
					<td><strong>Id</strong></td>
					<td><?=$detail['id_pasien'];?></td>
				</tr>
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$detail['nama_pasien'];?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?=$detail['alamat_pasien']?></td>
				</tr>
				<tr>
					<td><strong>Jenis Kelamin</strong></td>
					<td><?=$detail['jenis_kelamin']?></td>
				</tr>
				<tr>
					<td><strong>Telepon</strong></td>
					<td><?=$detail['telepon']?></td>
				</tr>
				<tr>
					<td><strong>suhu</strong></td>
					<td><?=$detail['suhu']?></td>
                </tr>
				<tr>
					<td><strong>Tanggal Periksa</strong></td>
					<td><?=date('d F Y', strtotime($detail['tgl_periksa']))?></td>
				</tr>
				<!-- <tr>
					<td><strong>Level</strong></td>
					<td><?=$detail['level']?></td>
				</tr> -->
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-warning"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<!-- <?php  
include '../asset/footer.php';
?> -->