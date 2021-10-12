<?php 

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = "jmlHalaman")
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {

        $str = "Komik : "  . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
