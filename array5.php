<?php 
	// Array Associative
	$mahasiswa = [
		[
		"nama" => "Ganefiatri Glacier Ibey", 
		"npm" => "13113647", 
		"jurusan" => "Sistem Informasi",
		"gambar" => "1.png"
		],
		[
		"nama" => "Ayuni Sekar Fauziyah", 
		"npm" => "22343647", 
		"jurusan" => "Keungan Fiscal",
		"gambar"=>"2.png"
		]
	];

	// cara menampilkan array associative
	echo $mahasiswa[1]["nama"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Array Associative</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
	<!-- cara menampikan array associative -->
 	<?php foreach($mahasiswa as $mhs) : ?>
	 	<ul>
	 		<li>
	 			<img src="img/<?= $mhs["gambar"]; ?> ">
	 		</li>
	 		<li><?= $mhs["nama"]; ?></li>
	 		<li><?= $mhs["npm"]; ?></li>
	 		<li><?= $mhs["jurusan"]; ?></li>
	 	</ul>
 	<?php endforeach; ?>

 </body>
 </html>