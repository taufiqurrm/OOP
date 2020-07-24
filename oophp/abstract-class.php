<?php

abstract class Produk{
  private $merk,
         $penulis,
         $penerbit,
         $harga,
         $diskon = 0;

  public function __construct ( $merk="merk", $penulis="penulis", $penerbit="penerbit", $harga = 0){
    $this->merk = $merk; 
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function setMerk ($merk) {
    $this->merk = $merk;
  }
  public function getMerk() {
    return $this->merk;
  }

  public function setPenulis ($penulis) {
    $this->penulis = $penulis;
  }
  public function getPenulis() {
    return $this->penulis;
  }

  public function setPenerbit ($penerbit) {
    $this->penerbit = $penerbit;
  }
  public function getPenerbit() {
    return $this->penerbit;
  }
  public function setDiskon( $diskon ){
     $this->diskon = $diskon;
   }

  public function getDiskon () {
    return $this->diskon;
  }
  public function setHarga ($harga) {
    $this->harga = $harga;
  }

  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon /100);
  }
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  abstract public function getInfoProduk();

  public function getInfo() {
    $str = "{$this->merk} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
    
  }
}

class Buku extends Produk {
  public $jmlLembar;
  
  public function __construct($merk="merk", $penulis="penulis", $penerbit="penerbit", $harga = 0, $jmlLembar=0){

    parent::__construct($merk, $penulis, $penerbit, $harga);
    $this->jmlLembar = $jmlLembar;
  }
    public function getInfoProduk(){
      $str = "Buku = " . $this->getInfo() . " - {$this->jmlLembar} Rem.";
      return $str;
    }
}

class  Game extends Produk {
  public $wktMain;

  public function __construct($merk="merk", $penulis="penulis", $penerbit="penerbit", $harga = 0, $wktMain=0){
    parent::__construct($merk, $penulis, $penerbit, $harga);
    $this->wktMain = $wktMain;
  }
  public function getInfoProduk(){
    $str = "Game = " . $this->getInfo() ." - {$this->wktMain} Jam.";
      return $str;
  }
}

class cetakInfoProduk {
  public $daftarProduk = array();

  public function tambahProduk( Produk $produk ) {
    $this->daftarProduk[] = $produk;
  }
  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";
    foreach ($this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} <br>";
    } 
    return $str;
    }
  }

$produk1 = new Buku("Cerita", "Taufiq", "Ayla", 3000000, 50);
$produk2 = new Game("FreeFire", "Fian", "Erlangga", 200000, 5);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();
