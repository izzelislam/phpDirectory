<head>
	<title>belanja toko</title>
	<style>
		body{
			font-family:sans-serif;
		}
		
		.atas{
			display:grid;
			grid-template-columns:auto auto auto;
			background-color:#35ab45;
			color :#ffffff;
			text-align:center;
			padding:5px;
			height:40px;
			margin-bottom:2em;
			box-shadow:0px 0px 4px 2px #8a8a8a;
			
		}
		.atastex{
			text-align:center;
			margin-left:570px;
			margin-top:1em;
		}
		.avatar{
			width:35px;
			float:right;
		}
		.bang{
			margin-left:450px;
			text-align:center;
		}
	
		
		.belanja{
			width:400px;
			margin:auto;
			padding:2px;
			margin-top:10px;
		}
		.input{
			box-sizing:border-box;
			width     :100%;
			height    :40px;
			border-radius:2px;
			font-size:14pt;
			
		}
		.tom{
			width:49%;
			height:40px;
			background-color:#28a6eb;
			color:#ffffff;
			border-radius:2px;
			font-size:18pt;
			box-shadow:0px 0px 12px 3px #a4a5a6;
		}
		.tom:hover{
			width:49%;
			height:40px;
			background-color:black;
			color:#ffffff;
			border-radius:2px;
			font-size:20pt;
			box-shadow:0px 0px 12px 3px #a4a5a6;
		}
		
		.warna{
			color:#35ab45;
		}
		.boxhasil{
			width:400px;
			margin:auto;
			padding:2px;
			margin-bottom:25px;
		}
		
		.boxhasil:hover{
			width:405px;
			margin:auto;
			padding:2px;
			margin-bottom:25px;
		}
		
		.pas{
			background-color:#35ab45;
			padding:15px;
			color:#ffffff;
			border-radius:3px;
			box-shadow:0px 0px 12px 3px #a4a5a6;
		}
		
		.over{
			background-color:red;
			padding:10px;
			color:#ffffff;
			border-radius:3px;
		}
		.kurang{
			background-color:#28a6eb;
			color:#fff;
			padding:10px;
			box-shadow:0px 0px 12px 2px #a4a5a6;
		}
		.upnormal{
			background-color:#000000;
			color:#fff;
			padding:15px;
			box-shadow:0px 0px 12px 3px #a4a5a6;
			
		}
		
		.kot{
			width:400px;
			margin:auto;
			margin-top:20px;
			
		}
		.tanggal{
			margin-left:29.25em;
			width:200px;
			color:#fff;
			background-color:#35ab45;
			padding:5px;
			border-radius:5px;
			text-align:center;
		}
		.waktu{
			width:100px;
			color:#fff;
			background-color:#000;
			padding:5px;
			border-radius:5px;
			text-align:center;
			margin-left:150px;
		}
		.bungtang{
			margin-top:2em;
		}
		.diskon{
			width:400px;
			margin:auto;
			padding:10px;
		}
		.seldis{
			margin:auto;
			text-align:center;
			margin-bottom:15px;
			width:400px;
			background-color:#35ab45;
			padding:4px;
			box-shadow:0px 0px 7px 2px #8a8a8a;
		}

		.indiss{
			width:100%;
			box-sizing:border-box;
			height:40px;
			font-size:18px;
		}
		
		#sel{
			color:white;
		}
		.tomdis{
			width:400px;
			margin-top:10px;
			height:40px;
			background-color:#28a6eb;
			border-radius:3px;
			font-size:16pt;
			color:#fff;
			box-shadow:0px 0px 5px 1px #8a8a8a;
		}
		.tomdis:hover{
			width:400px;
			margin-top:10px;
			height:40px;
			background-color:#000;
			border-radius:3px;
			font-size:16pt;
			color:#fff;
			box-shadow:0px 0px 5px 1px #8a8a8a;
		}
		.kotdis{
			width:379px;
			padding:10px;
			margin:auto;
			margin-top:5px;
			background-color:#28a6eb;
			color:#fff;
			border-radius:4px;
			box-shadow:0px 0px 7px 2px #8a8a8a;
			
		}
		.kotdis:hover{
			width:379px;
			padding:10px;
			margin:auto;
			margin-top:5px;
			background-color:#35ab45;
			color:#fff;
			border-radius:4px;
			box-shadow:0px 0px 7px 2px #8a8a8a;
		}
		.footer{
			width:100%;
			padding:5px;
			color:#fff;
			background:#35ab45;
			text-align:center;
			font-size:10pt;
			box-shadow:0px 0px 4px 1px #8a8a8a;
			position:bottom;
		}
		.ter{
			color:#d41002;
			text-align:center;
		}
	</style>
<head>
<body>

	<div class="atas">
		<div>
		</div>
		<div class="bannerdis">
			<h3 class="atastex">I N D O A P R I L</h3>
		</div>
		<div><span class="bang">BANG FKR</span><img class="avatar" src="https://scontent-sin2-2.xx.fbcdn.net/v/t1.0-9/70645891_745814375854548_2230547812993466368_n.jpg?_nc_cat=108&_nc_oc=AQmwkH3AZBFhhK1IfQ_LsKWFEk4WOuxtzY9ufRaw5uX5bRWSvGBJhk1G1scGdU-lByo&_nc_ht=scontent-sin2-2.xx&oh=7bfd75ae1548c199f87a530ef8e84355&oe=5E02335E"/>
		</div>
	</div>
	
		<center><span>💪️ selamat datang di indoapril <b id="nama" class="warna"></b> </span></center>
		
		<!--tanggal-->
	<div class="bungtang">	
		<span class="tanggal">
			<?php
				date_default_timezone_set('asia/jakarta');
				$tang=date('l , d-m-Y ');
				echo $tang;
			?>
		</span>
		<span class="waktu">
			<?php
				$jam=date('H:m:s');
				echo $jam;
			?>
		</span>	
	</div>	
		<!--akhir tanggal-->
		
	<div class="belanja">
		<form method="post" action="muttafakur_aplikasibelanja.php">
			<input class="input" type="number" name="rp" value="<?php echo isset($_POST['rp'])?$_POST['rp']:"";?>"><br><br>
			<input class="tom" type="submit" value="jumlah">
			<input class="tom" type="reset" value="hapus">	
		
	</div>
	<div class="boxhasil">
				<?php 
				
				 if (isset($_POST['rp'])){
					  $rp=$_POST['rp'];
					  $belanja=40000;
				 	 $tampil=(int)$belanja-(int)$rp;
				  	
					  	if($rp==40000){?><div class="pas"> <?php 
				  			echo "pas belanja anda Rp :<br><h2>".$rp."</h2>";?></div><?php
				  				}
				  	
				  		elseif ($rp<40000 && $rp>=0){?><div class="kurang"><?php 
				  		echo "Anda Baru belanja <br>"."<h2>Rp :".$rp."</h2>"."<br>belanjanya masih kurang <br>"."<b> Rp :".$tampil."</b> bro...";?></div><?php
				  				}
				  	
				  		elseif ($rp<0){?><div class="upnormal"><?php
				  		 echo "Masukkan Jumlah Nominal Dengan Benar...!!!";?></div><?php
				  				}
				  	
				  		elseif ($rp>40000){?><div class="over"><?php 
				  		echo "Rp :<b>".$rp."</b><br> anda sudah melebihi batas maxsimum belanja ... kurangi..ya<br><h1> 😎️😎️😎️😎️😎️    	               </h1><br>"; ?></div><?php
				  				}
				  		
						 }
				 else{?><span class="ter"><?php
					echo "<h4>silahkan masukkan jumlah nominal nya !!!!!</h4>";
				} 
			?>
			</span>
			</div>
			<!--dikonnnnnnn diskonnnnn diskonnnnn-->
			<div class="seldis">
				<span id="sel">Sialahkan masukkan 🙏️ nominal untuk menghitung diskon !!</span>
			</div>
		<div class="diskon">
			<input class="indiss" type="number" name="diskon" value="<?php echo isset($_POST['diskon'])?$_POST['diskon']:"";?>">
			<input class="tomdis" type="submit" value="hitung">
			
			<?php
				if (isset($_POST['diskon'])){
				$pr=$_POST['diskon'];
				$potong=((int)$pr*17.5)/100;
				$diskon=(int)$pr-(int)$potong;
				?><div class="kotdis"><?php
				echo "<h2>selamat..👏️</h2>anda mendapat diskon sebesar <h3>Rp :".$potong."</h3><br> jumlah yang harus di bayar adalah <h3>Rp :".$diskon."</h3>";
				}
				else{?><div class="kotdis"><?php
					echo "silahkan masukkan jumlah nya ! boss <b>😎️</b>";
				}
				?>
				</div>
			</div>
		</div>	
	</form>
	<div class="footer">
		<span>copyright &copy; 2019 BangFkr</span>
	<div>
</body>




    
