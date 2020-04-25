<?php 
include '../koneksi.php';

$sql = "SELECT * FROM pasien";

$res = mysqli_query($kon, $sql);

$pasien = array();

while ($data = mysqli_fetch_assoc($res)) {
	$pasien[] = $data;
}
?>
<?php 
include '../asset/header.php';
?>
<body>
<!-- <div class="container"> -->
	<div class="row mt-4">
		<div class="col-md">
			<div class="card">
  			  <div class="card-header">
			    <h2 class="card-title"><i class="far fa-address-card"></i> Data Pasien</h2>
			    <center><a href="tambah_pasien.php" class="badge badge-secondary">Tambah Data Pasien</a><center>
			  </div>
			  <div class="card-body">
			  	<table class="table table-danger">
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Suhu</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <?php  
				  	$no = 1;
				  	foreach ($pasien as $p) {?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$p['nama_pasien']?></td>
				      <td><?=$p['alamat_pasien']?></td>
                      <td><?=$p['suhu']?></td>

				      <td>
				      	<a href="detail_pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-warning">Detail</a>
						<a href="edit_pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-warning">Edit</a>
						<a href="hapus_pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-warning">Hapus</a>
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