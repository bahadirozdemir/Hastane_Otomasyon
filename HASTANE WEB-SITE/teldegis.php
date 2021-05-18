<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">  
	<title>Hesabım</title>
	<link rel="stylesheet" href="CSSDOSYALAR/maildegis.css">
</head>
<?php 
 $tc=$_POST["hastano"];
 $tel=$_POST["tel"];
 $baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error); 
 }

 $menusorgu = mysqli_query($baglan,"update hasta set tel_no='$tel' where tc_no='$tc'");
 $baglan->query($menusorgu);


?>
<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;" >
<div class="endis">
<div class="bilgilerim" style="background:#FFF">
<img src="https://media.tenor.com/images/cbae2dfd31aa5ec2fcb7f46b65e1550f/tenor.gif" style="margin:120px 0 0 260px">
<h1 style="margin:20px 0 0 120px">Telefon Numaranız Başarıyla Güncellendi.</h1>
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