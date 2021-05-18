<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">  
	<title>Hesabım</title>
	<link rel="stylesheet" href="CSSDOSYALAR/hesabim.css">
  <link rel="icon" href="images/Background.png" type="image/x-icon" />
</head>
<?php

$veri="";
if(isset($_POST['hastano']))
{
   $veri=$_POST['hastano'];

}
$baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error); 
 }

 $menusorgu = mysqli_query($baglan,"select AD,SOYAD,CINSIYET,TELEFON,E_POSTA from hastakayit where TC='$veri'");
 while ($veridizisi = mysqli_fetch_assoc($menusorgu))
 {
       $ad=$veridizisi["AD"];
       $soyad=$veridizisi["SOYAD"];
       $CINSIYET=$veridizisi["CINSIYET"];
       $telefon=$veridizisi["TELEFON"];
       $mail=$veridizisi["E_POSTA"];
   
 };

?>

<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;" >
<div class="endis">
<div class="bilgilerim">
<div class="baslik">HESAP BİLGİLERİM</div>
<div class="cizgi1"></div>
<div class="adi">
<div class="adiniz">Adınız :<?php echo $ad  ?></div>
</div>
<div class="adi">
<div class="adiniz">Soyadınız :<?php echo $soyad  ?> </div>
</div>
<div class="adi">
<div class="adiniz">E-Mail Adresiniz : <?php echo $mail  ?></div>
<a href="maildegis.php" style="float:right; margin:25px 35px 0 0; text-decoration:none; color:blue">Mail Adresinizi Değiştirin</a>
</div>
<div class="adi">
<div class="adiniz">Telefon Numaranız :<?php echo $telefon  ?> </div>
<a href="telefondegis.php" style="float:right; margin:25px 35px 0 0; text-decoration:none; color:blue">Telefon Numaranızı Değiştirin</a>
</div>
<div class="adi">
<div class="adiniz">Şifreniz : ******* </div>
<a href="sifredegistir.php" style="float:right; margin:25px 35px 0 0; text-decoration:none; color:blue">Şifrenizi Değiştirin</a>
</div>
</div>
</body>
</html>