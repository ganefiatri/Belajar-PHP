<?php 
// ada 7 variable superglobals yaitu
// $_GET,$_POST,$_REQUEST,$_SESSION,$_COOKIE,$_SERVER,$_ENV
// semuanya tipenya adalah array menganut tipe array associative
// akan fokus ke pengguna GET & POST
// apabila variable get di var_dump maka akan muncul array yang kosong begitu juga post
// namun berbeda dengan server, varible server sudah memiliki isi detail arraynya

// contoh penggunakan get

 $mahasiswa = [
 	[
 		"nama" => "Ganefiatri Glacier Ibey",
 		"npm" => "13113647",
 		"jurusan" => "Sistem Informasi",
 		"gambar" => "1.png"
 	],
 	[
 		"nama" => "Ayuni Sekar Fauziyah",
 		"npm" => "23443647",
 		"jurusan" => "Keungan Fiscal",
 		"gambar" => "2.png"
 	]
 ];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<ul>
	 	<?php foreach($mahasiswa as $mhs) : ?>
	 		<!-- agar bisa di akses di page yang akan di tuju maka tulis array ulang atau definisikan ulang namun dengan cara seperti berikut -->
	 		<a href="superglobal2.php?nama=<?= $mhs["nama"]; ?>&gambar=<?= $mhs["gambar"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&npm=<?= $mhs["npm"]; ?>"><li><?= $mhs["nama"] ?></li></a> 
	 	<?php endforeach; ?>
 	</ul>


 </body>
 </html>