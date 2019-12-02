<html>
<head>
	<title> validasi form</title>
</head>
<body>
	<?php
	if(isset($GET["nama"])){
	if($_GET['nama']=="kosong"){
	echo "nama belum di masukkan"	}	
	}
	?>
	
	<form method="post" action="validasi.php">
	<table>		
		<tr>	
			<td><label>nama</label></td>
			<td><input type="text" name="nama" value="nama"></td>
			<td><input type="submit" name="submit" value="input">
		</tr>
	</table>	
	</form>

</bosy>
</html>
