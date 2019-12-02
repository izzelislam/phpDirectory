<?php
$nama=$_POST['nama'];
if ($nama == ""){
header("location:validasi_form.php?nama=kosong");
}
else{
echo "nama anda adalah <br>" .$nama;
}
?>
