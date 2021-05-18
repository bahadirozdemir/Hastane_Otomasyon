<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSSDOSYALAR/RandevuAl.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="icon" href="images/Background.png" type="image/x-icon" />
<title>Randevu Al</title>
</head>
<body id="body" background="images/randevu.jpg" style="background-position:center; transform:scale(3);background-repeat:no-repeat; background-size:cover;">
<?php 
$dizi=array();
$sayac=0;
$dizi2=array();
$baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");
$menusorgu = mysqli_query($baglan,"select *from poliklinik"); 
 while($veridizisi = mysqli_fetch_assoc($menusorgu))
 {

     $veri=$veridizisi["poliklinik_adi"];
     $veri2=$veridizisi["poliklinik_id"];
     $dizi[$sayac]=$veri;
     $dizi2[$sayac]=$veri2;
     $sayac++;
 };

 ?>
 <script type="text/javascript">

window.onload=function()
{

 
     document.getElementById("body").style.transform="scale(1)";
	document.getElementById("body").style.transition="1s";
}
function bolum(id,bolum)
{

 	localStorage.setItem(1, id);  
 }
 </script>
<div class="endis">
<div class="numaralar">
<div class="cizgi1"></div>
<div class="cizgi2"></div>
<div class="cizgi3"></div>
<div class="cizgi4"></div>
<div id="" class="numara1"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">5</div></div>
<div id="" class="numara2"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">4</div></div>
<div id="" class="numara3"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">3</div></div>
<div id="" class="numara4"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">2</div></div>
<div id="" class="numara5"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">1</div></div>
</div>
<div class="randevucercevesi">
<div class="endis2"  style="height: 500px; overflow-x: hidden; overflow-y: scroll;">
<p style="color:#FFF; font:25px bold Tahoma, Geneva, sans-serif; margin:0 auto">Lütfen Tibbi Birim Seçiniz</p>
<div class="aramacubugu">
<input type="text" class="aramayazisi" name="isim" placeholder="Aramak İstediğiniz Kelimeyi Girin.">
<div class="aramabutonu">
<a>
<i class="fa fa-search"></i>
</a>
</div>
</div>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(1)"  value="<?php echo $dizi[0] ?>" name="buton1" class="tibbibirimler3"><?php echo $dizi[0] ?></button>
</form>
<form method="POST"   action="RandevuAl2.php">
<button type="submit"onclick="bolum(2)"  value="<?php echo $dizi[1] ?>" name="buton2" class="tibbibirimler3"><?php echo $dizi[1] ?></button>
</form>
<button type="submit" onclick="bolum(3)"  value="<?php echo $dizi[2] ?>" name="buton3" class="tibbibirimler3"><?php echo $dizi[2] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit"  onclick="bolum(4)"  value="<?php echo $dizi[3] ?>" name="buton4" class="tibbibirimler3"><?php echo $dizi[3] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit"onclick="bolum(5)"  value="<?php echo $dizi[4] ?>" name="buton5" class="tibbibirimler3"><?php echo $dizi[4] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(6)" value="<?php echo $dizi[5] ?>" name="buton6" class="tibbibirimler3"><?php echo $dizi[5] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(7)"  value="<?php echo $dizi[6] ?>" name="buton7" class="tibbibirimler3"><?php echo $dizi[6] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(8)"  value="<?php echo $dizi[7] ?>" name="buton8" class="tibbibirimler3"><?php echo $dizi[7] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(9)"  value="<?php echo $dizi[8] ?>" name="buton9" class="tibbibirimler3"><?php echo $dizi[8] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(10)"  value="<?php echo $dizi[9] ?>" name="buton10" class="tibbibirimler3"><?php echo $dizi[9] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(11)"  value="<?php echo $dizi[10] ?>" name="buton11" class="tibbibirimler3"><?php echo $dizi[10] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(12)" value="<?php echo $dizi[11] ?>" name="buton12" class="tibbibirimler3"><?php echo $dizi[11] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(13)"  value="<?php echo $dizi[12] ?>" name="buton13" class="tibbibirimler3"><?php echo $dizi[12] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(14)"  value="<?php echo $dizi[13] ?>" name="buton14" class="tibbibirimler3"><?php echo $dizi[13] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(15)" value="<?php echo $dizi[14] ?>" name="buton15" class="tibbibirimler3"><?php echo $dizi[14] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(16)" value="<?php echo $dizi[15] ?>" name="buton16" class="tibbibirimler3"><?php echo $dizi[15] ?></button>
</form>
<form method="POST" action="RandevuAl2.php">
<button type="submit" onclick="bolum(17)"  value="<?php echo $dizi[16] ?>" name="buton17" class="tibbibirimler3"><?php echo $dizi[16] ?></button>
</form>
</div>
</div>
</div>
</body>
</html>
