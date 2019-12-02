<?php  
function ulang($nilaiawal,$baris){
	for($i=0;$i<=$baris;$i++){  
	for($j=$nilaiawal;$j<=$i;$j++){  
	echo $j;  
	}  
	echo "<br>";  
	}
}

echo ulang(1,2);

	echo "<br>";  

function ulang1($nilaiawal,$baris){
	for($i=$nilaiawal;$i<=$baris;$i++){  
	for($j=$nilaiawal;$j<=$i;$j++){  
	echo $baris." ";  
	}  
	echo "<br>";  
	}
}

echo ulang1(2,4);



function ulang2($nilaiawal,$baris){
	for($i=0;$i<=$baris;$i++){  
	for($j=$nilaiawal;$j<=$i;$j++){  
	echo $j." ";  
	}  
	echo "<br>";  
	}
}

echo ulang2(6,12);
?>  








