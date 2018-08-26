<?php 
	// Belajar array 
	// array adalah variabel yang bisa di isi oleh banyak nilai

	// contoh variabel yang diisi oleh nilai
	
	$hari = "senin";
	echo $hari;

	echo "<br>";

	// contoh Variable yang diisi oleh banyak nilai

	// cara array lama php versi lama
	$hari = array("senin", "selasa", "rabu");
	var_dump($hari);

	echo "<br>";
	print_r($hari);

	echo "<br>";
	// cara array baru php versi baru
	$bulan = ["senin", "selasa", "rabu"];
	var_dump($bulan);

	echo "<br>";
	print_r($bulan);

	// cara menambahkan nilai pada array

	$bulan[] = "kamis";

	echo "<br>";
	print_r($bulan);

 ?>