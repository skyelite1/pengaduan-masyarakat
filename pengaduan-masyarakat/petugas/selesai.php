<?php
    include "./backend/proses_data.php";
    $id = $_GET['id_key'];
    $koneksi->query("UPDATE `pengaduan` SET status='selesai' where id_pengaduan = '$id'");
    header("location:dashboard.php");
?>