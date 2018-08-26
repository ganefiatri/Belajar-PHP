<?php 
// di php ada function yang sudah tersedia, dan ada function yang bisa dibuat sendiri
// contoh function yang ada di PHP
// time(), date(), mktime()

// contoh mengetahui waktu saat ini, maka hanya akan menampilkan detik dari 1 januari 1970 sampai saat ini
	echo time();
	echo "<br>";

// coba menggunakan date, harus menggunakan minimal 1 parameter, ada macam2 parameter seperti l,d,m,D,M,Y dll
	echo date("l");
	echo "<br>";

// coba menghitung 10 hari kedepan,terhitung dari tanggal saat ini
	echo date("l", time()+60*60*24*10);
	echo "<br>";
// coba menghitung mundur 10 hari kebelakang
	echo date("l", time()-60*60*24*10);

// menghitung hari lahir
// menggunakan MKTIME
// membuat sendiri detik
// detik,menit,jam,bulan,tanggal,tahun
	echo "<br>";
	echo date("l", mktime(0,0,0,5,22,1995));
	echo "<br>";
// strtotime, yaitu menghasilkan detik dari perhitungan tanggal bulan dan tahun
	echo strtotime("22 May 1995");

	echo "<br>";
	// menampilkan hari lahir
	echo date("l", strtotime("22 May 1995"));
 ?>