
<?php 

$sayi=0;
$baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error); 
 }

 $menusorgu = mysqli_query($baglan,"select *from uyeol");
 while ($veridizisi = mysqli_fetch_assoc($menusorgu))
 {

     $kontrol=$veridizisi["TC"];
     $veri=$_POST["tcno"];
     if($veri==$kontrol)
     {
        $sayi++;
        $degisken=1;
        echo $degisken;
     }
 };


if($sayi==0)
{
  $veri1=$_POST["tcno"];
  $veri2=$_POST["ad"];
  $veri3=$_POST["soyad"];
  $veri4=$_POST["dtarih"];
  $veri5=$_POST["cinsiyet"];
  $veri6=$_POST["tel"];
  $veri7=$_POST["mail"];
  $veri8=$_POST["sifre"];
  $veri8=hash('sha256', $veri8);
 
$sql = "call kayit_ol('".$veri1."','".$veri2."','".$veri3."','".$veri4."','".$veri5."','".$veri6."','".$veri7."','".$veri8."')";
mysqli_query($baglan, $sql);
}
     
 ?>
