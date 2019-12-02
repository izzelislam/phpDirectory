<html>
<body>
<form method="post">
	<input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?$_POST['nilai']:"";?>">
	<input type="submit">
</form>

<?php
$angka=$_POST['nilai'];

switch (true){
	
	case $angka < 20 && $angka>=0 :
		echo "nilai anda E";
		break;
		
	case $angka < 50 && $angka>=20:
		echo "nilai E ++";
		break;
		
	case $angka < 60 && $angka>=50:
		echo "nilai c ++";
		break;
		
	case $angka < 70 && $angka>= 60:
		echo "nilai B ";
		break;
		
	case $angka < 80 && $angka>=70 :
		echo "nilai B ++";
		break;
		
	case $angka <= 100 && $angka>=80:
		echo "nilai A ++";
		break;
		
	default:
		echo "wawwww";
		break;

}


?>

</body>
</html>
