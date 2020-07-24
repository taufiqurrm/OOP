<?php

class Produk{
  public $judul,
         $penulis,
         $penerbit,
         $harga;

  public function __construct ( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0){
    $this->judul = $judul; 
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

  }
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
    
  }
}


class Mobil extends Produk {
  public $jlmUnit;
  
  public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0, $jlmUnit=0){

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jlmUnit = $jlmUnit;
  }
    public function getInfoProduk(){
      $str = "Mobil = " . parent::getInfoProduk() . " - {$this->jlmUnit} Unit.";
      return $str;
    }
}
class  Game extends Produk {
  public $wktMain;

  public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0, $wktMain=0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->wktMain = $wktMain;
  }
  public function getInfoProduk(){
    $str = "Game = " . parent::getInfoProduk() ." - {$this->wktMain} Jam.";
      return $str;
  }
}

class cetakInfoProduk {
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Mobil("Honda", "Taufiq", "Ayla", 3000000, 50);
$produk2 = new Game("FreeFire", "Fian", "Erlangga", 2000000, 5);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
?>