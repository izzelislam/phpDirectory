<?php

//array indexed number
$nama_negara_asia=array("indonesia","malaysia","brunei","singapura","thailand");
		var_dump($nama_negara_asia);
		echo "<br>";
		echo "<br>";

$nama_ikan=array("emas","cupang","lohan","gabus");
		echo "saya suka ikan " ."<b>". $nama_ikan[1] ."</b>". " " . "goreng";
		echo "<br>";
		echo "saya suka ikan " . "<b>". $nama_ikan[2] ."</b>". " " . "rebus";
		echo "<br>";
		echo "<br>";


$nama_buah=array("mangga","pisang","pepaya","nanas","buahvita");
		$panjang_array=count($nama_buah);
			echo"<h4><i> di pasar banyak sekali buah di antaranya : </i></h4>";
		 for ($x=0 ; $x<$panjang_array ; $x++){
			echo $nama_buah[$x];
			echo "<br>";				
			}
		echo ("<br>");

		var_dump($nama_buah);
		echo ("<br>");
		echo ("<br>");
		echo count($nama_buah);
		echo ("<br>");
		echo ("<br>");

//array  asosiatif

echo "<h3>......array asosiatif......</h4>";

$tinggi_badan=array("jono"=>"167","joni"=>"170","mukidi"=>"154");
		echo "tinggi badan <b> mukidi </b> adalah : " . $tinggi_badan['mukidi'] . " cm";
		echo ("<br>");
		echo ("<br>");

$negara=array("indonesia"=>"asia tenggara", "makkah"=>"timur tengah", "canada"=>"benua amerika", "australia"=>"benua australia");
		echo "indonesia terletak di bagian "."<b>".$negara["indonesia"]."</b>"."<br>";
		echo "makkah terletak di bagian "."<b>".$negara["makkah"]."</b>"."<br>";
		echo "australia terletak di bagian "."<b>".$negara["australia"]."</b>"."<br>";
		echo ("<br>");
		echo ("<br>");

$asalwilayah=array("tambah"=>"jogja", "bambang"=>"solo", "nganu"=> "semarang");
		var_dump($asalwilayah);
		echo ("<br>");
		echo "<br> dari manakah asal si bambang ? " ."<b>". $asalwilayah['bambang']."</b>";

$ukuran_baju_saya=array("kemeja"=>"M", "koko"=>"l", "kaos"=>"M & XL" );
		var_dump($ukuran_baju_saya);
		echo ("<br>");
		echo count($ukuran_baju_saya);
		echo ("<br>");
		echo ("<br>");
		echo "ukuran kaos saya adalah :" . $ukuran_baju_saya['kaos'];



		      
?>





















