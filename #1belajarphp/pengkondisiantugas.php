<html>
	<head>
		<title>kondisional</title>
	</head>
<body>
	<form method="post" action="pengkondisiantugas.php">
		<label>nilai :</label>
		<input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?$_POST['nilai']:""; ?>"/>
		<input type="submit" name="hasil"/>
	</form>
	
	
	<?php

		if(isset($_POST['nilai'])==20){
			echo"nilai E";
		}
		
	
	?>
	
	

</body>
</html>

















	
