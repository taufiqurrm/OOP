<?php 

spl_autoload_register(function( $class ) {
	//App\Produk\User = ["App", "Produk", "User"]
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Produk/' . $class . '.php';
});

spl_autoload_register(function( $class ) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Service/' . $class . '.php';
});