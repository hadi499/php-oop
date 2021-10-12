<?php

require_once 'App/init.php';


$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";

$produk1->setJudul("baru");
echo $produk1->getJudul();
