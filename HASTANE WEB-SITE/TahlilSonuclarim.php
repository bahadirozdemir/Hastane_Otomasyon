<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Tahlil Sonuçlarım</title>
<link rel="stylesheet" href="CSSDOSYALAR/tahlilsonuclarim.css">
<link rel="icon" href="images/Background.png" type="image/x-icon" />
</head>
<?php 
error_reporting(0);
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

$TAHLIL=array();
$TARIH=array();
$DOKTOR=array();
$HASTANE=array();
$sayac=0;
 $menusorgu = mysqli_query($baglan,"select TAHLIL,TARIH,DOKTOR,HASTANE from sonuclar where TC='$veri'");
 while ($veridizisi = mysqli_fetch_assoc($menusorgu))
 {
      $TAHLIL[$sayac]=$veridizisi["TAHLIL"];
      $TARIH[$sayac]=$veridizisi["TARIH"];
      $DOKTOR[$sayac]=$veridizisi["DOKTOR"];
      $HASTANE[$sayac]=$veridizisi["HASTANE"];
      $sayac++;
 };



 ?>
<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;" >
<table>
  <thead>
    <tr>
      <th>Tahlil Adı</th>
      <th>Tahlil Tarihi</th>
      <th>Doktor Adı</th>
        <th>Hastane Adı</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $TAHLIL[0] ?></td>
      <td><?php echo $TARIH[0] ?></td>
      <td><?php echo $DOKTOR[0] ?></td>
      <td><?php echo $HASTANE[0] ?></td>
    </tr>
    <tr>
      <td><?php echo $TAHLIL[1] ?></td>
      <td><?php echo $TARIH[1] ?></td>
      <td><?php echo $DOKTOR[1] ?></td>
      <td><?php echo $HASTANE[1] ?></td>
    </tr>
    <tr>
    <td><?php echo $TAHLIL[2] ?></td>
      <td><?php echo $TARIH[2] ?></td>
      <td><?php echo $DOKTOR[2] ?></td>
      <td><?php echo $HASTANE[2] ?></td>
    </tr>
    <tr>
      <td><?php echo $TAHLIL[3] ?></td>
      <td><?php echo $TARIH[3] ?></td>
      <td><?php echo $DOKTOR[3] ?></td>
      <td><?php echo $HASTANE[3] ?></td>
    </tr>					
    <tr>
       <td><?php echo $TAHLIL[4] ?></td>
      <td><?php echo $TARIH[4] ?></td>
      <td><?php echo $DOKTOR[4] ?></td>
      <td><?php echo $HASTANE[4] ?></td>
    </tr>
    <tr>
    <td><?php echo $TAHLIL[5] ?></td>
      <td><?php echo $TARIH[5] ?></td>
      <td><?php echo $DOKTOR[5] ?></td>
      <td><?php echo $HASTANE[5] ?></td>
    <tr>
     <td><?php echo $TAHLIL[6] ?></td>
      <td><?php echo $TARIH[6] ?></td>
      <td><?php echo $DOKTOR[6] ?></td>
      <td><?php echo $HASTANE[6] ?></td>
    </tr>
    <tr>
      <td><?php echo $TAHLIL[7] ?></td>
      <td><?php echo $TARIH[7] ?></td>
      <td><?php echo $DOKTOR[7] ?></td>
      <td><?php echo $HASTANE[7] ?></td>
    </tr>
    <tr>
      <td><?php echo $TAHLIL[8] ?></td>
      <td><?php echo $TARIH[8] ?></td>
      <td><?php echo $DOKTOR[8] ?></td>
      <td><?php echo $HASTANE[8] ?></td>
    </tr>
      <tr>
      <td><?php echo $TAHLIL[9] ?></td>
      <td><?php echo $TARIH[9] ?></td>
      <td><?php echo $DOKTOR[9] ?></td>
      <td><?php echo $HASTANE[9] ?></td>
    </tr>
  </tbody>
</table>










</body>
</html>