<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Detail Mahasiswa</title>
</head>
<body>
	<h1>Tampilan Detail Mahasiswa</h1>
	<ul>
		<!-- agar bisa mengakses Array di page awal maka menggunakan $_GET -->
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["npm"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
		<li><a href="superglobal1.php">Kembali Ke menu awal</a></li>
	</ul>
</body>
</html>