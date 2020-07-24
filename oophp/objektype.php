<?php

//Objek Type

class Produk{
  public $judul,
         $penulis,
         $penerbit,
         $harga;

  public function __construct ( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0 ){
    $this->judul = $judul; 
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}


class cetakInfoProduk {
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("Honda", "Taufiq", "Ayla", 3000000);
$produk2 = new Produk("Yamaha", "Fian", "Ninja", 2000000);

echo "Mobil = ".$produk1->getLabel();
echo "<br>";
echo "Speda = ".$produk2->getLabel();
echo "<br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
?>