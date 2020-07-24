<?php 

class  Game extends Produk implements InfoProduk{
  public $wktMain;

  public function __construct($merk="merk", $penulis="penulis", $penerbit="penerbit", $harga = 0, $wktMain=0){
    parent::__construct($merk, $penulis, $penerbit, $harga);
    $this->wktMain = $wktMain;
  }

    public function getInfo() {
    $str = "{$this->merk} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk(){
    $str = "Game = " . $this->getInfo() ." - {$this->wktMain} Jam.";
      return $str;
  }
}