<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$nama 		= $_POST['nama_pasien'];
	$alamat 	= $_POST['alamat_pasien'];
	$jenis 	= $_POST['jenis_kelamin'];
	$suhu 	 	= $_POST['suhu'];
	$tgl 	 	= $_POST['tgl_periksa'];
	$telp 	 	= $_POST['telepon'];

	$sql = "INSERT INTO pasien(nama_pasien, alamat_pasien, jenis_kelamin, suhu, tgl_periksa, telepon) VALUES ('$nama', '$alamat', '$jenis', '$suhu', '$tgl', '$telp')";

	$res = mysqli_query($kon, $sql);
	$count = mysqli_affected_rows($kon);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di tambah !!!');
			document.location.href='index.php';
			</script>
		";
	}
}
?>