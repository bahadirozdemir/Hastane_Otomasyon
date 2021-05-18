<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Hesabım</title>
  <link rel="stylesheet" href="CSSDOSYALAR/maildegis.css">
  <link rel="icon" href="images/Background.png" type="image/x-icon" />
  <script type="text/javascript" language="javascript" src="javascript/maildegis.js"></script>
</head>
<?php 

$tc=$_POST["tcno"];
$sifre=$_POST["sifre"];
$mail=$_POST["email"];
$sifreyedek=$sifre;
$sifre=hash('sha256', $sifre);
$sayac=0;
$baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
$baglan->set_charset("utf8"); 
 $menusorgu = mysqli_query($baglan,"update hasta_uye_olur set sifre='$sifre' where hasta_id='$tc'");
 $menusorgu = mysqli_query($baglan,"select hasta_id,mail_adres from hasta_uye_olur where hasta_id='$tc'");
  if($veridizisi = mysqli_fetch_assoc($menusorgu))
 {
     $veri=$veridizisi["hasta_id"];
     $veri2=$veridizisi["mail_adres"];

     if($veri==$tc && $veri2==$mail)
     {
        $sayac=1;
        $sql = mysqli_query($baglan,"update hasta_uye_olur set sifre='$sifre' where hasta_id='$tc'");
         $sql2 = mysqli_query($baglan,"update uyeol set SIFRE='$sifre' where TC='$tc'");
        $baglan->query($sql);
        $baglan->query($sql2);

     }
   

 };




 ?>
<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;" >
<div class="endis">
<div class="bilgilerim" style="background:#FFF">
<img src="https://media.tenor.com/images/cbae2dfd31aa5ec2fcb7f46b65e1550f/tenor.gif" style="margin:120px 0 0 260px">
<h1 style="margin:20px 0 0 120px">Yeni Şifreniz Başarıyla Güncellendi.</h1>
<h1 style="margin:20px 0 0 220px">Yönlendiriliyorsunuz.</h1>
<script type="text/javascript">
   
  var x = <?php echo $sayac  ?>;
  if(x==0)
  {
     window.location.href="sifremiunuttum3.php";
  }
  else
  {
     

    setInterval(function() {yonlendir()},3000);

    function yonlendir()
   {
    window.location.href="index.html";
    }
  

  }


</script>
</div>
</div>
</body>
</html>  