<html>
	<head>
		<title>kondisional</title>
	</head>
<body>
	
	<br>
	<hr>
	<form method="post" action="pengkondisiantugas1.php" >
		<input type="number" name="bil" placeholder="angka pertama...">+
		<input type="number" name="bill" placeholder="angka kedua...">
		<input type="submit" name="hasil">
	</form>
	<?php
	
			$bil=$_POST['bil'];
			$bill=$_POST['bill'];

			if ((isset($_POST['hasil'])==true)||(isset($_POST[]))){
				echo (int)$bil+(int)$bill;
				}

	?>
	
</body>
</html>

















	
