<?php
$koneksi        = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");
$join           = "select * from pengaduan join masyarakat on masyarakat.nik = pengaduan.nik";
$select         = mysqli_query($koneksi, $join);
include 'backend/proses_data.php';
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/add.css' rel='stylesheet'>
  <link rel="stylesheet" href="bs/css/dashboard.css">
</head>

<body style="background-color : #ffffff;">
<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a href="home.php" class="navbar-brand">
      <!-- Logo Image -->
      
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold">Pengaduan Masyarakat</span>
    </a>

    <div id="navbarSupportedContent" class="d-flex justify-content-end">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
        <li class="nav-item"><a href="backend/logout.php" class="nav-link">logout</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container mt-5">
    <table class="table table-secondary table-bordered text-center">
      <thead>
        <tr class="table-dark">
          <th scope="col">id</th>
          <th scope="col">Nama Pelapor</th>
          <th scope="col">isi Laporan</th>
          <th scope="col">Bukti Foto</th>
          <th scope="col">Status</th>
          <th scope="col">aksi</th>
        </tr>
      </thead>
      <?php while ($data = mysqli_fetch_array($select)) { ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $data['id_pengaduan']; ?></th>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['isi_laporan']; ?></td>
            <td><img src="assets/image/<?php echo $data['foto']; ?>" alt="" width="150px"></td>
            <td><button type="button" class="btn btn-outline-primary mt-4" disabled><?php echo $data['status']; ?></button></td>
            <td>
              <form action="edit.php" method="get">
                <button class="btn btn-success" name="id_key" value="<?= $data['id_pengaduan'] ?>">EDIT</button>
              </form>
            </td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
      <a href="laporan.php"><button type="button" class="btn btn-secondary mb-3 btn-lg"><i class="gg-add"></i></button></a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>