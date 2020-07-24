<?php 

abstract class Produk{
  protected $merk,
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
  abstract public function getInfo();
}