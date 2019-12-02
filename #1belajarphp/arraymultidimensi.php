<?php
echo"<h4>Pengertian</h4>";
echo "Array multi dimensi adalah sebuah aaray<br>yang di dalam nya terdapat array<br>satu dua atau bahkan lebih";

echo"<h4>Two Dimension Array</h4>contoh :1<hr>";
$nama_buah=array
		(
		array("nagka","matang","3000"),
		array("pisang","muda","4000"),
		array("rambutan","matang","9000")		
		);
	
		echo "nama buah :".$nama_buah[0][0] ."<br>"." keadaan :" .$nama_buah[0][1]."<br>"."harga per kilo :".$nama_buah[0][2]."<br><br>" ;
		echo "nama buah :".$nama_buah[1][0] ."<br>"." keadaan :" .$nama_buah[1][1]."<br>"."harga per kilo :".$nama_buah[1][2]."<br><br>" ;
		echo "nama buah :".$nama_buah[2][0] ."<br>"." keadaan :" .$nama_buah[2][1]."<br>"."harga per kilo :".$nama_buah[2][2] ;

echo "<br><br>";
echo "<hr>";
echo"contoh :2 <br><hr>";


$buku=array
	(
	array("phpdasar","bambang","2017","cahaya ilmu"),
	array("html5","mukidi","2016","ilmu komputer"),
	array("css","jono","2018","teknomodern"),
	array("basis data","joni","2015","datasains")
	);
	echo "judul buku :".$buku[0][0]."<br>penulis :".$buku[0][1]."<br>tahun terbit".$buku[0][2]."<br>penerbit :".$buku[0][3]."<br><br>";
	echo "judul buku :".$buku[1][0]."<br>penulis :".$buku[1][1]."<br>tahun terbit".$buku[1][2]."<br>penerbit :".$buku[1][3]."<br><br>";
	echo "judul buku :".$buku[2][0]."<br>penulis :".$buku[2][1]."<br>tahun terbit".$buku[2][2]."<br>penerbit :".$buku[2][3]."<br><br>";
	echo "judul buku :".$buku[3][0]."<br>penulis :".$buku[3][1]."<br>tahun terbit".$buku[3][2]."<br>penerbit :".$buku[3][3];


echo "<br><br>";
echo "<hr>";
echo"<h4>Theree Dimention Array</h4><br>contoh :1<hr>";

$food=array
	(
	 array(
		array("soto","6000",),
		array("sate","16000",),
		array("ikan godox","1000",),
		array("sego garig","500",)
 )
);

	echo "<b>MENU & HARGA</b><br>";
	echo $food[0][0][0].". Rp : ".$food[0][0][1]."<br>";
	echo $food[0][1][0].". Rp : ".$food[0][1][1]."<br>";
	echo $food[0][2][0].". Rp : ".$food[0][2][1]."<br>";
	echo $food[0][3][0].". Rp : ".$food[0][3][1];

echo "<br><br>";
echo "<hr>";
echo"contoh :2 <br><hr>";

$siswa=array
	(
	array(
		array("joni","098724536178","informatika","joni02@gmail.com"),
		array("jono","098727376445","sistem komputer","jono99@gmail.com"),
		array("bono","098728764536","ilmu komunikasi","bono@gmail.com"),
		array("toni","098727364539","pendidikan ipa","toni@gmail.com"),
		array("boni","098722394874","informatika","boni@gmail.com"),
		array("soni","098725243536","hukum","soni@gmail.com"),
		array("doni","098729274543","tekhnik sipil","doni999@gmail.com"),
		array("goni","098727465454","sastra indo","goni@gmail.com")
			
 )
);

	echo "<b>Data siswa</b><br>";
	echo "nama :".$siswa[0][0][0]."<br>NIM :".$siswa[0][0][1]."<br>Jurusan :".$siswa[0][0][2]."<br>Email :".$siswa[0][0][3];
	echo "<br><br>";
	echo "nama :".$siswa[0][1][0]."<br>NIM :".$siswa[0][1][1]."<br>Jurusan :".$siswa[0][1][2]."<br>Email :".$siswa[0][1][3];
	echo "<br><br>";
	echo "nama :".$siswa[0][2][0]."<br>NIM :".$siswa[0][2][1]."<br>Jurusan :".$siswa[0][2][2]."<br>Email :".$siswa[0][2][3];
	echo "<br><br>";
	echo "nama :".$siswa[0][3][0]."<br>NIM :".$siswa[0][3][1]."<br>Jurusan :".$siswa[0][3][2]."<br>Email :".$siswa[0][3][3];
	echo "<br><br>";
	echo "nama :".$siswa[0][4][0]."<br>NIM :".$siswa[0][4][1]."<br>Jurusan :".$siswa[0][4][2]."<br>Email :".$siswa[0][4][3];
	echo "<br><br>";
	echo "nama :".$siswa[0][5][0]."<br>NIM :".$siswa[0][5][1]."<br>Jurusan :".$siswa[0][5][2]."<br>Email :".$siswa[0][5][3];
	echo "<br><br>";
	echo "nama :".$siswa[0][6][0]."<br>NIM :".$siswa[0][6][1]."<br>Jurusan :".$siswa[0][6][2]."<br>Email :".$siswa[0][6][3];
	echo "<br><br>";
	echo "nama :".$siswa[0][7][0]."<br>NIM :".$siswa[0][7][1]."<br>Jurusan :".$siswa[0][7][2]."<br>Email :".$siswa[0][7][3];

echo "<br><br>";
echo "<hr>";
echo"contoh :3 <br><hr>";

$pulpen=array
		(
		array(
			array("standart","hitam",1000),
			array("snowman","hitam",1500),
			array("joyko","biru",2000),
			array("fabercastle","hitam",3000),
			
	)
);

	echo "<b>daftar produk bolpoint dan harga</b><br><br>";
	echo "merek :".$pulpen[0][0][0]."<br>warna :".$pulpen[0][0][1]."<br>harga Rp :".$pulpen[0][0][2]."<br><br>";
	echo "merek :".$pulpen[0][1][0]."<br>warna :".$pulpen[0][1][1]."<br>harga Rp :".$pulpen[0][1][2]."<br><br>";
	echo "merek :".$pulpen[0][2][0]."<br>warna :".$pulpen[0][2][1]."<br>harga Rp :".$pulpen[0][2][2]."<br><br>";
	echo "merek :".$pulpen[0][3][0]."<br>warna :".$pulpen[0][3][1]."<br>harga Rp :".$pulpen[0][3][2]."<br><br>";

echo "<br><br>";
echo "<hr>";
echo"<h4>asending index</h4><br>contoh :1<hr>";

$angka=array(900,5,90,56,23);
sort($angka);

$pa=count($angka);
for($x=0;$x<$pa;$x++){
	echo $angka[$x];
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"contoh :2 <br><hr>";

$umur=array("jono"=>30,16,45,19,25);
sort($umur);

$pa=count($umur);
for($x=0;$x<$pa;$x++){
	echo "acending :".$umur[$x];
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"contoh :3 <br><hr>";

$duit=array(10000,40000,200000,500,20000,60000);
sort($duit);

$panjang=count($duit);
for($x=0;$x<$panjang;$x++){
	echo "duit Rp :".$duit[$x];
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"<h4>Desending index</h4><br>contoh :1<hr>";

$angka=array(900,5,90,56,23);
rsort($angka);

$pa=count($angka);
for($x=0;$x<$pa;$x++){
	echo $angka[$x];
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"contoh :2 <br><hr>";

$umur=array("jono"=>30,16,45,19,25);
rsort($umur);

$pa=count($umur);
for($x=0;$x<$pa;$x++){
	echo "desending :".$umur[$x];
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"contoh :3 <br><hr>";

$duit=array(10000,40000,200000,500,20000,60000);
rsort($duit);

$panjang=count($duit);
for($x=0;$x<$panjang;$x++){
	echo "duit Rp :".$duit[$x];
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"<h4>asending asoiatif array</h4><br>contoh :1<hr>";

$jumlah_penduduk=array("Indonesia"=>"20000000","india"=>"62372528262524","bumi"=>"8262534342526279272","pluto"=>"0");
asort($jumlah_penduduk);

foreach($jumlah_penduduk as $x=>$x_jumlahpenduduk){
	   echo "Key=" . $x . ", jumlah penduduk=" . $x_jumlahpenduduk;
           echo "<br>";
}


echo "<br><br>";
echo "<hr>";
echo"contoh :2<hr>";

$populasi=array("kate"=>"200","kalkun"=>"900","jago"=>"1000","mati"=>"0");
asort($populasi);

foreach($populasi as $x=>$x_ekor){
	echo "ayam  _".$x."_  jumlah :".$x_ekor;
	echo "<br>";
}


echo "<br><br>";
echo "<hr>";
echo"<h4>desending asoiatif array</h4><br>contoh :1<hr>";

$jumlah_penduduk=array("Indonesia"=>"20000000","india"=>"62372528262524","bumi"=>"8262534342526279272","pluto"=>"0");
rsort($jumlah_penduduk);

foreach($jumlah_penduduk as $x=>$x_jumlahpenduduk){
	   echo "Key=" . $x . ", jumlah penduduk=" . $x_jumlahpenduduk;
           echo "<br>";
}


echo "<br><br>";
echo "<hr>";
echo"contoh :2<hr>";

$populasi=array("kate"=>"200","kalkun"=>"900","jago"=>"1000","mati"=>"0");
rsort($populasi);

foreach($populasi as $x=>$x_ekor){
	echo "ayam  _".$x."_  jumlah :".$x_ekor;
	echo "<br>";
}



echo "<br><br>";
echo "<hr>";
echo"<h4>desending asc key</h4><br>contoh :1<hr>";

$jumlah_penduduk=array("Indonesia"=>"20000000","india"=>"62372528262524","bumi"=>"8262534342526279272","pluto"=>"0");
krsort($jumlah_penduduk);

foreach($jumlah_penduduk as $x=>$x_jumlahpenduduk){
	   echo "Key=" . $x . ", jumlah penduduk=" . $x_jumlahpenduduk;
           echo "<br>";
}


echo "<br><br>";
echo "<hr>";
echo"contoh :2<hr>";

$populasi=array("kate"=>"200","kalkun"=>"900","jago"=>"1000","mati"=>"0");
krsort($populasi);

foreach($populasi as $x=>$x_ekor){
	echo "ayam  _".$x."_  jumlah :".$x_ekor;
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"contoh :3<hr>";

$massa=array("sepeda"=>"200","trux"=>"90000","mobil"=>"10000","motor"=>"100");
krsort($populasi);

foreach($massa as $x=>$x_kg){
	echo "massa _".$x."_  sebesar :".$x_kg.". kg";
	echo "<br>";
}


echo "<br><br>";
echo "<hr>";
echo"<h4>asending asc key</h4><br>contoh :1<hr>";

$jumlah_penduduk=array("Indonesia"=>"20000000","india"=>"62372528262524","bumi"=>"8262534342526279272","pluto"=>"0");
arsort($jumlah_penduduk);

foreach($jumlah_penduduk as $x=>$x_jumlahpenduduk){
	   echo "Key=" . $x . ", jumlah penduduk=" . $x_jumlahpenduduk;
           echo "<br>";
}


echo "<br><br>";
echo "<hr>";
echo"contoh :2<hr>";

$populasi=array("kate"=>"200","kalkun"=>"900","jago"=>"1000","mati"=>"0");
arsort($populasi);

foreach($populasi as $x=>$x_ekor){
	echo "ayam  _".$x."_  jumlah :".$x_ekor;
	echo "<br>";
}

echo "<br><br>";
echo "<hr>";
echo"contoh :3<hr>";

$massa=array("sepeda"=>"200","trux"=>"90000","mobil"=>"10000","motor"=>"100");
arsort($populasi);

foreach($massa as $x=>$x_kg){
	echo "massa _".$x."_  sebesar :".$x_kg.". kg";
	echo "<br>";
}


?>

































