<?php

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Jurnalrisa";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "PointBlank";
// $produk2->tambahProperty = "test";
// var_dump($produk2->judul);

$produk3 =new Produk();
$produk3->judul = "Dilan";
$produk3->penulis = "Pidi Baiq";
$produk3->penerbit = "Gramedia";
$produk3->harga = 50000;

$produk4 =new Produk();
$produk4->judul = "Free Fire";
$produk4->penulis = "Forrest li";
$produk4->penerbit = "111dots Studi";
$produk4->harga = 350000;

echo  "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();