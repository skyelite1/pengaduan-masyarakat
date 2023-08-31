<?php
    $koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");

    if(!$koneksi){
        print_r($koneksi->errorInfo());
    }