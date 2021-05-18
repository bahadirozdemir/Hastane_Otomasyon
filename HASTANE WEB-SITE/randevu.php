<?php 

$baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");
 


  $veri1=$_POST["tarih"];
  $veri2="1";
  $veri3=$_POST["doktorid"];
  $veri4=$_POST["tc"];
  $veri5=$_POST["saat"];
  $veri6=$_POST["polid"];
  $veri7="AKTIF";


$sql = "call secilen_randevu('".$veri1."','".$veri2."','".$veri3."','".$veri4."','".$veri5."','".$veri6."','".$veri7."')";
$deneme= mysqli_query($baglan, $sql);
	$kontrol=1;
	echo $kontrol;	
 ?>

