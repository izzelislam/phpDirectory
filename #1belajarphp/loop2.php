<?php  
$abjad=array_merge(range(chr(65),chr(90)));
	for ($w=6;$w>=0;$w--){
		for ($x=0;$x<=6;$x++){
			if ($x <6){
				if ($x<=$w){
					echo $abjad[$x];
				}else{
					echo "..";
				}
			}else{
				for ($y=6;$y>=0;$y--){
					if ($y <= $w){
						echo $abjad[$y];
					}else {
						echo "..";
					}
				}
			}
		}
		echo "<br>";
	}

?>  
