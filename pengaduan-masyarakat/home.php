<?php
session_start();
$nik = $_SESSION['nik'];
$koneksi = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");
$nama = $koneksi->query("select nama from masyarakat where nik = '$nik' ");
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/add.css' rel='stylesheet'>
</head>

<body style="background-color : #ffffff;">
<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <!-- Logo Image -->
      
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold">Pengaduan Masyarakat</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="d-flex justify-content-end">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
        <li class="nav-item"><a href="laporan.php" class="nav-link">Laporan</a></li>
        <li class="nav-item"><a href="backend/logout.php" class="nav-link">logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="cover-container d-flex h-50  mx-auto flex-column justify-content-center text-center">
<main role="main" class="inner cover">
<?php while ($data = mysqli_fetch_array($nama)) { ?>
        <h1 class="cover-heading">selamat datang <?php echo $data['nama']; ?> </h1>
    <?php } ?>
        <p class="lead">Selamat datang di website pengaduan masyarakat silahkan buat laporan anda dengan menekan tombol di bawah</p>
        <p class="lead">
          <a href="laporan.php" class="btn btn-lg btn-secondary">buat laporan</a>
        </p>
      </main>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>