<?php
//include 'koneksi.php';
include 'asset/header.php';

// $buku = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(stok) AS jb FROM buku"));
// $jumlah_buku = $buku["jb"];

// $anggota = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS ja FROM anggota"));
// $jumlah_anggota = $anggota["ja"];

// $pinjam = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jt FROM peminjaman"));
// $jumlah_transaksi = $pinjam["jt"];
?>
<body>


<center><div class="container">
    <div class="row mt-4">
    <div class="col-md">
    <h2 style="font-family: lucida sans typewriter"><i class="fas fa-hospital-user"></i>WELCOME, OFFICER</h2>
    <hr class="bg-dark">
    </div>
    </div><center>

    <center><div class="row">
    <div class="col-md-4">
    <div class="card bg-success" style="width: 20rem;">
  <div class="card-body text-white">
    <h5 class="card-title">DATA PETUGAS</h5>
    <p class="card-text" style="font-size:60px"></p>
    <a href="http://localhost/sehatyuk/petugas/index_petugas.php" class="text-white">Lihat Data<i class="fas-fa-angle-double-right"></i></a>
  </div>
</div>
    </div>

    <div class="col-md-4">
    <div class="card bg-secondary" style="width: 20rem;">
  <div class="card-body text-white">
    <h5 class="card-title">DATA PASIEN</h5>
    
    <p class="card-text" style="font-size:60px"></p>
    <a href="http://localhost/sehatyuk/pasien/index.php" class="text-white">Lihat Data</a>
  </div>
  </div>
    </div>
    <img src="img/backgroundfix.svg"  width="25%"alt="">
    <center><img src="img/bgfix.svg"  width="45%"alt=""></center>
    </center>


<!-- <?php
include 'asset/footer.php';
?> -->
</body>
</html>