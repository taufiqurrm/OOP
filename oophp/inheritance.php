<?php


class Produk{
  public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jlmUnit,
         $wktMain;

  public function __construct ( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga = 0, $jlmUnit=0,
    $wktMain=0){
    $this->judul = $judul; 
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jlmUnit = $jlmUnit;
    $this->wktMain = $wktMain;

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
    public function getInfoProduk(){
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jlmUnit} Unit.";
      return $str;
    }
}

class  Game extends Produk {
  public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->wktMain} Jam.";
      return $str;
  }
}

class cetakInfoProduk {
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Mobil("Honda", "Taufiq", "Ayla", 3000000, 50, 0);
$produk2 = new Game("FreeFire", "Fian", "Erlangga", 2000000, 0, 5);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
?>