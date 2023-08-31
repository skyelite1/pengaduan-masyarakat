<?php
include "cek_login_petugas.php";
include "koneksi.php";

$id = $_POST['id'];
// echo "$id";
// die();
$tanggal = date("Y-m-d");
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_SESSION['id_petugas'];
$query = $koneksi->query("insert into tanggapan values('', $id, '$tanggal', '$tanggapan', $id_petugas)");

if($query){
    header("location:../petugas/detail-pengaduan.php?id=$id");
}else{
    print_r($koneksi->errorInfo());
    die();
}