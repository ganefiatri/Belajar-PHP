<?php 
	$angka = [1 , 2, 3, 22, 11, 43, 1];
	// berikut cara menampilkan nilai array ke user
	$angka[] = 10;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Array 2</title>
 	<style>
 		.kotak {
 			height: 50px;
 			width: 50px;
 			background-color: salmon;
 			line-height: 50px;
 			float: left;
 			text-align: center;
 			border: solid;
 		}
 		.clear {
 			clear: both;
 		}

 	</style>
 </head>
 <body>
 	<!-- pengulangan normal -->

 	<?php for ($i=0; $i < 7 ; $i++) { ?>
 		<div class="kotak"> <?php echo $angka[$i]; ?> </div>
 	<?php } ?>

 	<!-- cara kedua agar bisa menghitung sendiri jumlah array menggunakan count, in case ada penambahan atau peng - nilai -->
 	<div class="clear"></div>

 	<?php for ($i=0; $i < count($angka) ; $i++) { ?>
 		<div class="kotak"> <?php echo $angka[$i]; ?> </div>
 	<?php } ?>

 	<!-- untuk memberikan spasi -->
 	<div class="clear"></div>

 	<!-- pengulangan yang lebih simple menggunakan foreach -->
 	<?php foreach( $angka as $a) { ?>
 		<div class="kotak"><?php echo $a; ?></div>
 	<?php } ?>

 	<div class="clear"></div>

 	<!-- ada cara yang lebih ringkas untuk foreach mempersingkat penulisan koding -->
 	<?php foreach( $angka as $a ) : ?>
 		<div class="kotak"><?php echo $a; ?></div>
 	<?php endforeach ?>

 </body>
 </html>