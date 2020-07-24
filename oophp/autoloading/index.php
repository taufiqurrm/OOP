<?php 

require_once 'App/init.php';
$produk1 = new Buku("Cerita", "Taufiq", "Ayla", 3000000, 50);
$produk2 = new Game("FreeFire", "Fian", "Erlangga", 200000, 5);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();