<?php 
	// user defined function atau function yang dibuat sendiri
	// contoh function buat sendiri
	
	function Salam($waktu, $nama){
	return ("selamat $waktu, $nama");

	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Function buatan</title>
 </head>
 <body>
 	<h1><?php echo Salam("pagi","gane"); ?></h1>
 </body>
 </html>