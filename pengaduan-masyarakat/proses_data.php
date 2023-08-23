<?php

include 'db.php';

$db = new DB();

$data_akun = $db->query("SELECT * FROM pengaduan join masyarakat on masyarakat.nik = pengaduan.nik");

if(isset($_REQUEST['tambah']))
{
    $id = $_REQUEST['id'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $gambar = $_REQUEST ['gambar'];
    $db->query("INSERT INTO akun VALUES ('$id', '$username', '$password','$gambar')");
    header('Location: dashboard.php');
}

if(isset($_REQUEST['delete']))
{
    $id = $_REQUEST['delete'];
    $db->query("DELETE FROM pengaduan WHERE id_pengaduan=$id");
    header('Location: dashboard.php');
}

if(isset($_REQUEST['update']))
{
    $id = $_GET['id_key'];
    $isi = $_REQUEST['isi_laporan'];
    $nama_foto = $_FILES['foto']['name'];
    $asal_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($asal_foto, "image/$nama_foto");
    $db->query("UPDATE pengaduan SET isi_laporan='$isi', foto='$nama_foto' WHERE id_pengaduan=$id");
    header('Location: dashboard.php');
}

if(isset($_GET['id_key']))
{
    $id = $_GET['id_key'];
    $data = $db->cariId($id);
}