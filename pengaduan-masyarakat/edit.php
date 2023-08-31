<?php
    include './backend/proses_data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <form action="" method="POST" enctype="multipart/form-data">

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="isi">isi Laporan</label>
                <textarea class="form-control" id="isi" rows="3" name="isi_laporan"><?= $data[0]['isi_laporan']?></textarea>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Bukti Foto</label>
                <input class="form-control" type="file"  id="foto" name="foto">
            </div>

            <!-- Submit button -->
            <button type="submit" name="update" class="btn btn-primary btn-block mb-4">EDIT</button>
        </form>
    </div>
</body>
</html>