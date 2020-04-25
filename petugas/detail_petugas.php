<?php  
include '../asset/header.php';
include '../koneksi.php';

$id_petugas = $_GET['id_petugas'];

$sql = "SELECT * FROM petugas o WHERE id_petugas=$id_petugas";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Petugas</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Petugas</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
            <tr>
					<td><strong>Id</strong></td>
					<td><?=$detail['id_petugas'];?></td>
				</tr>
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$detail['nama_petugas'];?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?=$detail['alamat_petugas']?></td>
				</tr>
				<tr>
					<td><strong>Telepon</strong></td>
					<td><?=$detail['telp']?></td>
				</tr>
				<tr>
					<td><strong>Username</strong></td>
					<td><?=$detail['username']?></td>
				</tr>
				<tr>
					<td><strong>Password</strong></td>
					<td><?=$detail['password']?></td>
				</tr>
				<!-- <tr>
					<td><strong>Level</strong></td>
					<td><?=$detail['level']?></td>
				</tr> -->
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index_petugas.php" class="btn btn-warning"><i class="fas fa-angle-double-left"></i>Kembali</a>

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