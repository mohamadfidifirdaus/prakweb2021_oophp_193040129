<?php 

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga ;

           public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
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
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shomen Jump", 300000);
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);





echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";


$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);