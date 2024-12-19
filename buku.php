<?php
class Buku{
    protected $koneksi;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbperpus";

        $this->koneksi = new mysqli($hostname, $username, $password, $dbname);
        if($this->koneksi->error){
            die("koneksi database gagal:" .$this->koneksi->error);
        }
    }

    public function tampilSemuaBuku(){
    
        $buku = mysqli_query($this->koneksi,"select * from buku");
        $data = [];
        while($row = mysqli_fetch_assoc($buku)){
            $data[] = $row;
        }
        return $data;
    }
}
?>