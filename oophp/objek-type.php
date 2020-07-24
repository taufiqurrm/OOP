<?php
//Objek Type
class Dealer {
	public $penjual,
		   $merk,
		   $warna;

	public function __construct($penjual, $merk, $warna) {
		$this->penjual=$penjual;
		$this->merk=$merk;
		$this->warna=$warna;
	}
	public function ambil() {
		return "$this->penjual, $this->merk, $this->warna";
	}
}

class InfoGudang{
	public function cetak(Dealer $Dealer){
		$str =  "{$Dealer->$penjual} | {$Dealer->ambil()} ({$Dealer->warna})";
		return $str;
	}
}
$barang = new Dealer("Taufiq", "Jazz", "Hitam");
$barang1 = new Dealer("Anam", "Alya", "Merah");

echo "Mobil : ". $barang->ambil();
echo "<br>";
echo "Mobil : ". $barang1->ambil();

$Infobarang = new InfoGudang();
echo "Terjual ". $Infobarang->cetak($barang);
