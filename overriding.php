<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",
        $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Novel extends Produk {
    public $jmHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",
    $harga = 0, $jmHalaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmHalaman = $jmHalaman;
    }
    public function getInfoProduk(){
        $str = "Novel : ". parent::getInfoProduk() ." - {$this->jmHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",
    $harga = 0, $waktuMain = 0) {
    parent::__construct($judul , $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 =new Novel("Dilan", "Fidi Baiq", "Gramedia", 50000, 60,);
$produk2 =new Game("Free Fire", "Forrest li", "111dots Studi", 350000, 30,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

