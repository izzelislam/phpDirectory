<body>
<form method="post" action="perhitungan_diskon.php">
	<input type="number" name="diskon" value="<?php echo isset($_POST['diskon'])?$_POST['diskon']:"";?>">
	<input type="submit">
	<?php
	$pr=$_POST['diskon'];
	$potong=($pr*17.5)/100;
	$diskon=$pr-$potong;
	
	echo $diskon;
	?>
</form>
</body>
