<?php 
     


$baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error);
 }


$menusorgu = mysqli_query($baglan,"select *from uyeol");
 while ($veridizisi = mysqli_fetch_assoc($menusorgu))
 {

     $kontrol=$veridizisi["TC"];
     $kontrol2=$veridizisi["SIFRE"];
     $kontrol3=$_POST["tcno"];
     $veri=hash('sha256',$_POST["sifre"]);
     if($kontrol==$kontrol3 && $kontrol2==$veri)
     {
        $degisken=1;
        echo $degisken; 
     }
 };

 ?>
