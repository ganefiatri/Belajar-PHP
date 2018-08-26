<?php 
	// array numerik
	// array multi
	$siswa = ["Ganefiatri Glacier Ibey", "13113647", "Sistem Informasi"];
	$mahasiswa = [
		["Ganefiatri Glacier Ibey", "13113647", "Sistem Informasi"], ["Ayuni Sekar Fauziyah", "32212323", "Ilmu Politik Piscal"]
		];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Array Multidimensi</title>
 	<style>
 		.clear {
 			clear: both;
 		}
 	</style>
 </head>
 <body>
 	<!-- array biasa -->
 	<?php foreach($siswa as $s): ?>
 		<li><?= $s; ?></li>
 	<?php endforeach; ?>

 	<div class="clear"></div>

 	<!-- dengan cara lain -->
 	<ul>
 		<li><?= $siswa[0]; ?></li>
 		<li><?= $siswa[1]; ?></li>
 		<li><?= $siswa[2]; ?></li>
 	</ul>

 	<div class="clear"></div>

 	<!-- menampilan array multidimensi -->
		
	<?php foreach( $mahasiswa as $mhs) : ?>
		<ul>
			<li><?=  $mhs[0]; ?></li>
			<li><?=  $mhs[1]; ?></li>
			<li><?=  $mhs[2]; ?></li>
		</ul>
	<?php endforeach; ?>

 </body>
 </html>