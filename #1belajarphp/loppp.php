<?php
for ($w=0;$w<=5;$w++){
	for($d=1;$d<=$w;$d++){
		echo "*";
	}
	echo "<br>";
}

echo "<br><br><br>";

for ($w=1;$w<=5;$w++){
	for($d=1;$d<=$w;$d++){
		echo "*";
	}
	echo "<br>";
}

echo "<br><br><br>";

for ($w=1;$w<=5;$w++){
	for($d=5;$d>=$w;$d--){
		echo "*";
	}
	echo "<br>";
}

echo "<br><br><br>";

for ($i=1; $i<=5; $i++){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}	

echo "<br><br><br>";

for ($i=1; $i<=5; $i++){
    for ($j=5; $j>=$i; $j--){
        echo $j;
    }echo "<br>";
}

echo "<br><br><br>";

for($i=1;$i<6;$i++) { 
	for($j=1;$j<=$i;$j++){ 
		echo $j; } 
	echo "<br>"; 
	} 
	
echo "<br><br><br>";	
	
for($i=5;$i>=1;$i--){ 
	for($k=1;$k<=$i;$k++) { 
		echo $k; } 
	echo "<br>"; 
	}
?>


