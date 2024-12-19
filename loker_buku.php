<?php
include_once 'buku.php';

class Loker extends Buku{
    public function tampilDataBuku($loker){
        
        $data = [];
        $loker_buku = mysqli_query($this->koneksi,"select * from buku WHERE loker_buku='" . $loker . "'");
        
        while($row = mysqli_fetch_assoc($loker_buku)){
            $data[] = $row;
        }
        return $data;
    }
}
?>