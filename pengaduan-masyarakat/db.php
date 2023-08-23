<?php
class DB {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'pengaduan_masyarakat';

    private $koneksi;

    function __construct()
    {
        return $this->koneksi = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
    }

    public function query($query)
    {
        return mysqli_query($this->koneksi, $query);
    }
    
    public function ambilSemuaData()
    {
        $data = $this->query("SELECT * FROM pengaduan join masyarakat on masyarakat.nik = pengaduan.nik");
        $result = [];

        while($akun = mysqli_fetch_array($data))
        {
            array_push($result, $akun);
        }

        return $result;
    }

    public function cariId($id)
    {   
        $data = $this->query("SELECT * FROM pengaduan WHERE id_pengaduan=$id");
        $result = [];

        while($akun = mysqli_fetch_array($data))
        {
            array_push($result, $akun);
        }

        return $result;
    }
}
?>