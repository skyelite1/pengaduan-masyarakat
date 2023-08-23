<?php
    $koneksi = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $proses_login = $koneksi->query("SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password';");
    $data = mysqli_num_rows($proses_login);
    if($data > 0){
        header('location:dashboard.php');
    }else{
        echo "akun tidak ada!";
        header('location:login.php');
    }
?>