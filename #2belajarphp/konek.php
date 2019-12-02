<?php
$server="localhost";
$username="root";
$dbname="cobaphp";

$konek=new mysqli ($server,$username,$dbname);

if (!konek){
	
	echo"koneksi gagal";
}

else{
"berhasil"
}
?>
