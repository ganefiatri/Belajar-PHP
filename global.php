<?php 
// variable scope atau lingkup variable
// variable yang buat d dalam function hanya untuk lingkup function saja
// untuk mengakses variable diluar function maka menggunakan function global

// contoh penggunaan Funcion Global
$x = 10;

echo $x;
echo "<br>";

// buat function
function angkaX(){
	// dengan menggunakan function global maka function bisa akses diluar lingkup variable
	global $x;
	echo $x;
}

// apabila tidak menggunakan function global maka nilai x tidak akan muncul atau terjadi error karena berbeda lingkup variable
angkaX();

 ?>