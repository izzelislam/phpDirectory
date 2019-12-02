<html>
<head>
	<title> validasi form</title>
</head>
<body>
<?php
if(isset($_GET['nama'])){
if ($_GET['nama']=="kosong"){
   echo "anda belum masukkan nama";
 }
}
?>
	
	<form method="post" action="validasi.php">
	<table>		
		<tr>	
			<td><label>nama</label></td>
			<td><input type="text" name="nama" ></td>
			<td><input type="submit" name="submit" value="input"></td>
		</tr>
	</table>	
	</form>

</body>
</html>
