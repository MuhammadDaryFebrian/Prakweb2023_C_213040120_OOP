<?php

require_once 'App/init.php';

$produk1 =new Novel("Dilan", "Fidi Baiq", "Gramedia", 50000, 60,);
$produk2 =new Game("Free Fire", "Forrest li", "111dots Studi", 350000, 30,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();