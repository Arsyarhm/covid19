<?php 
    include '../koneksi.php';

    //$kon = mysqli_connect("localhost", "root", "", "db_perpus");

    $id_pasien = $_GET["id_pasien"];
    $query = mysqli_query($kon, "DELETE FROM pasien WHERE id_pasien=$id_pasien");
    

    if($query > 0){
        echo "
        <script>
        alert('Data berhasil dihapus !');
        document.location.href = 'index.php';
        </script>
        "
        ;
    }
?>