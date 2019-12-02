
<body>
<form method="post">
	<input type="number" name="kk" value="<?php echo isset($_POST['kk'])? $_POST['kk']:"";?>">
	<input type="submit">
</form>

<?php
$t=isset($_POST['kk'])? $_POST['kk']:null;
if($t){
for ($w=1;$w<=5;$w++){
	for($d=1;$d<=$w;$d++){
		$t++;
		echo "$t".",";
	
	}
	echo "<br>";
}
}

?>

</body>
