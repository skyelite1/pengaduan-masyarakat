<?php
    $koneksi = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $koneksi->query("INSERT INTO `masyarakat` VALUES ('$nik','$nama','$username','$password','$telp')");
    header("location:login.php");
?>