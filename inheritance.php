<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = "jmlHalaman", $waktuMain = "waktuMain")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

    // public function getInfoLengkap()
    // {
    //     $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    //     if ($this->tipe == "Komik") {
    //         $str .= " - {$this->jmlHalaman} Halaman.";
    //     } else if ($this->tipe == "Game") {
    //         $str .= " - {$this->waktuMain} Jam.";
    //     }
    //     return $str;
    // }
}
class Komik extends Produk
{
    public function getInfoProduk()
    {

        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {

        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
