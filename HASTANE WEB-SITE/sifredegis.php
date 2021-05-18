<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">  
	<title>Hesabım</title>
	<link rel="stylesheet" href="CSSDOSYALAR/maildegis.css">
</head>
<?php 
 $tc=$_POST["hastano"];
 $sifre=$_POST["yenisifre"];
 $yedeksifre=$sifre;
 $sifre=hash('sha256', $sifre);
 $baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error); 
 }

 $menusorgu = mysqli_query($baglan,"update hasta_uye_olur set sifre='$sifre' where hasta_id='$tc'");
 $baglan->query($menusorgu);

?>
<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;" >
<div class="endis">
<div class="bilgilerim" style="background:#FFF">
<img src="https://media.tenor.com/images/cbae2dfd31aa5ec2fcb7f46b65e1550f/tenor.gif" style="margin:120px 0 0 260px">
<script type="text/javascript">
var yenisifre=<?php echo $yedeksifre   ?>;
</script>
<h1 style="margin:20px 0 0 170px">Şifreniz Başarıyla Güncellendi.</h1>
<h1 style="margin:20px 0 0 220px">Yönlendiriliyorsunuz.</h1>
<script type="text/javascript">
	
 setInterval(function() {yonlendir()},3000);

 function yonlendir()
 {
     window.location.href="Ana_Sayfa.php";
 }


</script>
</div>
</div>
</body>
</html>  