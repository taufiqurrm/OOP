<?php

//Inheritance Problem

class Produk{
  public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jlmUnit,
         $wktMain,
         $tipe;

  public function __construct ( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0, $jlmUnit=0,
    $wktMain=0, $tipe ){
    $this->judul = $judul; 
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jlmUnit = $jlmUnit;
    $this->wktMain = $wktMain;
    $this->tipe = $tipe;
  }
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  public function getInfoLengkap(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    if($this->tipe == "Mobil"){
      $str .= " - {$this->jlmUnit} Unit.";
    }else if ($this->tipe == "Game") {
      $str .= " ~ {$this->wktMain} Jam.";
      }
    return $str;
    
  }
}


class cetakInfoProduk {
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("Honda", "Taufiq", "Ayla", 3000000, 50, 0, "Mobil");
$produk2 = new Produk("FreeFire", "Fian", "Erlangga", 2000000, 0, 2, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
?>