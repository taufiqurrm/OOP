<?php 

class Buku extends Produk implements InfoProduk {
  public $jmlLembar;
  
  public function __construct($merk="merk", $penulis="penulis", $penerbit="penerbit", $harga = 0, $jmlLembar=0){

    parent::__construct($merk, $penulis, $penerbit, $harga);
    $this->jmlLembar = $jmlLembar;
  }

    public function getInfo() {
    $str = "{$this->merk} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
    
  }
    public function getInfoProduk(){
      $str = "Buku = " . $this->getInfo() . " - {$this->jmlLembar} Rem.";
      return $str;
    }
}