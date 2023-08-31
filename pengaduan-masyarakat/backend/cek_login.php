<?php
session_start();


if(!isset($_SESSION['username'])){
    // echo "tidak ada ssesion <br />";
    header("location:login.php?pesan=Silahkan Login Terlebih Dahulu");
}