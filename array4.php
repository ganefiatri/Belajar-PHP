<!DOCTYPE html>
<html>
<head>
	<title>Array Multidimensi</title>
	<style>
		.kotak{
			height: 30px;
			width: 30px;
			background-color: salmon;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;

		}
		.kotak:hover{
			transform: rotate(360deg);
			border-radius: 30px;
		}
		.clear {
			clear: both;
		}

	</style>
</head>
<body>
	<!-- cara lain dari pembuatan array multidimensi sama seperti array3 -->
	<?php 
		$angka = [[1,2,3],[4,1,3],[1,4,3]];
	 ?>

	 <!-- cara menampilkan angka menggunakan echo -->
	 <!-- contoh ingin menampilkan angka 2 pada element array -->
	 <?php echo $angka[0][1]; ?>
	 <div class="clear"></div>


	 <!-- salah satu cara menampikan array multidimensi -->
	 <?php foreach($angka as $a) : ?>
	 	<?php foreach($a as $b) : ?>
	 		<div class="kotak"><?= $b;?></div>
	 	<?php endforeach; ?>
	 	<div class="clear"></div>
	<?php endforeach; ?>

</body>
</html>