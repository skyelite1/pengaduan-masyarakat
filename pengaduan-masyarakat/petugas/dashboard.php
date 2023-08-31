<?php
$koneksi        = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");
$join           = "select * from pengaduan join masyarakat on masyarakat.nik = pengaduan.nik";
$select         = mysqli_query($koneksi, $join);
include '../backend/proses_data.php';
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/add.css' rel='stylesheet'>
  <link rel="stylesheet" href="bs/css/dashboard.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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
        <li class="nav-item active"><a href="dashboard.php" class="nav-link">Verifikasi laporan</a></li>
        <li class="nav-item"><a href="../backend/logout.php" class="nav-link">logout</a></li>
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
            <td><img src="../assets/image/<?php echo $data['foto']; ?>" alt="" width="150px"></td>
            <td><button type="button" class="btn btn-outline-primary mt-4" disabled><?php echo $data['status']; ?></button></td>
            <td>
            <div class="btn-group align-self-center" role="group" aria-label="Basic example">
              <form action="" method="post">
                <button class="btn btn-danger btn-md" type="submit" name="delete" value="<?= $data['id_pengaduan'] ?>">
                <img src="../assets/icon/delete.svg" width="20px">
                </button>
                <a href="detail-pengaduan.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-primary btn-sm"><img src="../assets/icon/detail.svg" width="20px"></a>
                <a href="terima.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-success btn-sm"><img src="../assets/icon/done.png" width="20px"></a>
                <a href="tolak.php?id=<?= $data['id_pengaduan'] ?>" class="btn btn-danger btn-sm"><img src="../assets/icon/tolak.png" width="20px"></a>
            </form>
            </div>
            </td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script>
   function printPage() {
      window.print();
   }
</script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</body>

</html>