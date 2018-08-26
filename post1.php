<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
	<?php if (isset($_POST["submit"])): ?>
		<h1>Selamat datang, <?= $_POST["nama"]; ?></h1>	
	<?php endif ?>
	
	<!-- post hampir sama dengan get, namun post tidak menampilkan inputan di link atau url -->
	<!-- post biasanya menggunakan form -->
	<!-- atribute action bisa digunakan untuk berpindah halaman -->
	<form action="" method="post">
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama">
		<button type="submit" name="submit">submit</button>
	</form>

</body>
</html>