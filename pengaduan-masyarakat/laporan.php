<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="bs/css/laporan.css">
</head>

<body>
    <!-- NAVBAR-->
<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a href="home.php" class="navbar-brand">
      <!-- Logo Image -->
      
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold">Pengaduan Masyarakat</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="d-flex justify-content-end">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
        <li class="nav-item"><a href="backend/logout.php" class="nav-link">logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    <H1 class="text-center mt-3">Silahkan isi laporan di bawah ini dengan benar</H1>
    <div class="container mt-5">
        <form action="backend/proses_pengaduan.php" method="POST" enctype="multipart/form-data">

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="isi">isi Laporan</label>
                <textarea class="form-control" id="isi" rows="4" name="isi_laporan"></textarea>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Bukti Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>