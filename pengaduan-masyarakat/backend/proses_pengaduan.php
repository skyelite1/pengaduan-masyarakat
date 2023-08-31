<?php
    session_start();
    if (isset($_SESSION['nik'])) {
        header("location:login.php");
    }

    $koneksi        = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");
    
    $nik = $_SESSION['nik'];
    $isi = $_POST['isi_laporan'];
    $tanggal = date('Y-m-d');
    $nama_foto = $_FILES['foto']['name'];
    $asal_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($asal_foto,"../assets/image/$nama_foto");

    $koneksi->query("INSERT INTO `pengaduan` VALUES ('','$tanggal','$nik','$isi','$nama_foto','baru')");
    header("location:../dashboard.php");
?>