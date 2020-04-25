<?php 
include '../koneksi.php';

$sql = "SELECT * FROM petugas";

$res = mysqli_query($kon, $sql);

$petugas = array();

while ($data = mysqli_fetch_assoc($res)) {
	$petugas[] = $data;
}
?>
<?php 
include '../asset/header.php';
?>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card">
  			  <div class="card-header">
			    <center><h2 class="card-title"><i class="far fa-address-card"></i> Data Petugas</h2><center>
			  </div>
			  <div class="card-body">
			  	<table class="table table-success">
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <?php  
				  	$no = 1;
				  	foreach ($petugas as $o) {?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$o['nama_petugas']?></td>
				      <td><?=$o['alamat_petugas']?></td>
				      <td>
				      	<a href="detail_petugas.php?id_petugas=<?= $o['id_petugas'];?>" class="badge badge-success">Detail Petugas</a>
				      </td>
				    </tr>
				    <?php
				    	$no++;
				  	}
				  ?>
				  </tbody>
				</table>
			  </div>
			</div>
		</div>
	</div>
</div>
				</body>


<!-- <?php 
include '../asset/footer.php';
?> -->