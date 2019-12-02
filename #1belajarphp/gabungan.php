<html>
	<head>
		<title>kondisional</title>
	</head>
<body>
	
	<form method="post" action="gabungan.php">
		<label>nilai :</label>
		<input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?$_POST['nilai']:""; ?>">
		<input type="submit" name="num">

	<?php
	
	if(isset($_POST['nilai'])){
	$no=$_POST['nilai'];
	if ($no==20){
		echo"nilai E";
	}
	elseif ($no <=20 && $no>=1){
		echo "<b>jelek kali</b>";	
		}
		
	elseif($no>=20 && $no<=50){
		echo "<h1>kurang.....</h1>";
	}

	elseif($no>=51 && $no<=60){
		echo "<h1>lumayan.....</h1>";
	}
	
		elseif($no>=61 && $no<=70){
		echo "<h1>bagus.....</h1>";
	}
	
		elseif($no>=71 && $no<=100){
		echo "<h1>👍️👍️👍️👍️👍️👍️👍️👍️👍️💯️💯️💯️💯️💯️</h1>";
	}
		
		elseif($no>101 or $no<0 ){
		echo "<h1>masukkan nilai dengan benar 1-100 !!!</h1>";
	}
	
	else{
		echo"silahkan masukan nilai!!!  anda belum masukkan nilai";
	}
	
	}
	
	else{
		echo "";
	}
	?>
	

	<br>
	<hr>
	
		<input type="number" name="bil" placeholder="angka pertama..." value="<?php echo isset($_POST['bil'])?$_POST['bil']:""; ?>"/>+
		<input type="number" name="bill" placeholder="angka kedua..." value="<?php echo isset($_POST['bill'])?$_POST['bill']:"";?>"/>
		<input type="submit" name="submit">


	<?php
			$bil=$_POST['bil'];
			$bill=$_POST['bill'];
			$hasil=$bil+$bill;
			
			if (isset($_POST['bil']) && isset($_POST['bill'])){
			
				echo $hasil;

		}
	?>

	</form>
	

	
	<br><br>
	


		<script>
		 alert("😅️😅️😅️😅️😅️😅️😅️😅️😅️😅️😅️ \n senyum pagi");
		</script>
	
</body>
</html>









