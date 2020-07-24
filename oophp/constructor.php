<?php
//Constructor

class Dealer {
	public $penjual="penjual",
		   $merk="merk",
		   $warna="warna";

	public function __construct($penjual, $merk, $warna) {
		$this->penjual=$penjual;
		$this->merk=$merk;
		$this->warna=$warna;
	}
	public function ambil() {
		return "$this->penjual, $this->merk, $this->warna";
	}

}
$barang = new Dealer("Taufiq", "Scoopy", "Hitam");

echo "Milik : ". $barang->ambil();

?>