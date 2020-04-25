<?php  
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $id_pasien = $_POST['id_pasien'];
    $nama_pasien   = $_POST['nama_pasien'];
    $alamat_pasien   = $_POST['alamat_pasien'];
    $telepon      = $_POST['telepon'];
    $suhu   = $_POST['suhu'];
    $tgl_periksa = $_POST['tgl_periksa'];

    

    $sql = "UPDATE pasien  SET nama_pasien='$nama_pasien', alamat_pasien='$alamat_pasien', telepon='$telepon', suhu='$suhu', tgl_periksa='$tgl_periksa'
     WHERE id_pasien=$id_pasien";

    $res = mysqli_query($kon, $sql);
    $count = mysqli_affected_rows($kon);
     var_dump($count);
    if($res == 1){
        echo "
            <script>
            alert('Data Berhasil Di Edit !!!');
            document.location.href='index.php';
            </script>
        ";
    }
  }
?>