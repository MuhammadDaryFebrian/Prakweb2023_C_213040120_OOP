<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga ;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
        return $str;
    }
}


$produk1 =new Novel("Dilan", "Fidi Baiq", "Gramedia", 50000, 60,);
$produk2 =new Game("Free Fire", "Forrest li", "111dots Studi", 350000, 30,);


echo  "Novel : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);