<?php
	function hitnilai($isi,$baris){
		for($i=1;$i<=$baris;$i++){
			for($k=1;$k<=$i;$k++){
			 $tam=$isi+$k;
		($tam>=50 && $tam<=64)?$hasil = " (C) ":"";
		($tam>=80 && $tam<=82)?$hasil=" (B) ":"";
			
			 	echo $tam.$hasil ;
			}
			echo "<br>";
		}
	}
	echo"<br>".hitnilai(50,3);
	echo"<br>".hitnilai(60,5);
	echo"<br>".hitnilai(80,3);
?>
