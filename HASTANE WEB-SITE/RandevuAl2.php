<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSSDOSYALAR/RandevuAl2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/vericek.js"></script>
<link rel="icon" href="images/Background.png" type="image/x-icon" />
<title>Randevu Al</title>
</head>
<body id="body" background="images/randevu.jpg" style="background-position:center; opacity:0; background-repeat:no-repeat; background-size:cover; " onLoad="calistir()" >
<div class="endis">
<div class="numaralar">
<div class="cizgi1"></div>
<div class="cizgi2"></div>
<div class="cizgi3"></div>
<div class="cizgi4"></div>
<div id="1" class="numara1"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">5</div></div>
<div id="2" class="numara2"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">4</div></div>
<div id="3" class="numara3"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">3</div></div>
<div id="4" class="numara4"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">2</div></div>
<div id="5" class="numara5"><div class="tickduzen"><img src="images/gif/unnamed-removebg-preview (2).png"></div></div>
</div>
<div class="randevucercevesi">  

<div class="endis2">
<p style="color:#FFF; font:25px bold Tahoma, Geneva, sans-serif; margin:0 auto;">Lütfen Doktor Seçiniz</p>
	 <script type="text/javascript">
	 function calistir()
	{
		
	  document.getElementById("body").style.opacity=".9";
		document.getElementById("body").style.transition="3s";
		
	}
	 </script>
	 

<?php 
error_reporting(0);
foreach (array_keys($_POST) as $field)
{
   $deneme=$_POST[$field];
}
$baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
$baglan->set_charset("utf8");
$isim=array();
$soyisim=array();
$doktorid=array();
$unvan=array();
$sayac=0;
$menusorgu = mysqli_query($baglan,"select DOKTOR,AD,SOYAD,UNVAN from doktorbilgi where POLIKLINIK='$deneme'");
 while($veridizisi = mysqli_fetch_assoc($menusorgu))
 {
      $isim[$sayac]=$veridizisi["AD"];
      $soyisim[$sayac]=$veridizisi["SOYAD"];
      $doktorid[$sayac]=$veridizisi["DOKTOR"];
      $unvan[$sayac]=$veridizisi["UNVAN"];
      $sayac++;
 };

     
     $i=0;
     $n=0;

  ?>
 

<div class="doktorbuyukkutu">
<div   onClick="doktor1()" value="<?php echo $doktorid[0] ?>" id="doktor1" class="doktorkutusu2"><p style="color:#000; margin:-5px 0 0 0; font:20px bold tahoma"><?php echo $unvan[$i]; echo " "; echo $isim[$i]; echo " "; echo $soyisim[$n]; ?></p><div class="seckutusudesign"><a href="" class="tikla">Seç</a></div></div>
<?php
     if($sayac==2)
    {
    	$i=1;
    	$n=1;

    }

  ?>
<div   onClick="doktor2()"value="<?php echo $doktorid[1] ?>" id="doktor2" class="doktorkutusu3"><p style="color:#000; margin:-5px 0 0 0; font:20px bold tahoma"><?php echo $unvan[$i]; echo " "; echo $isim[$i]; echo " "; echo $soyisim[$n]; ?></p><div class="seckutusudesign"><a href="" class="tikla">Seç</a></div></div>

<?php
     if($sayac==3)
    {
    	$i=2;
    	$n=2;

    }

  ?>


<div  onClick="doktor3()" value="<?php echo $doktorid[2] ?>" id="doktor3" class="doktorkutusu4"><p style="color:#000; margin:-5px 0 0 0; font:20px bold tahoma"><?php echo $unvan[$i]; echo " ";  echo $isim[$i]; echo " "; echo $soyisim[$n]; ?></p><div class="seckutusudesign"><a href="" class="tikla">Seç</a></div></div>
<?php
     if($sayac==4)
    {
    	$i=3;
    	$n=3;

    }

  ?>

<div  onClick="doktor4()" value="<?php echo $doktorid[3] ?>" id="doktor4" class="doktorkutusu4"><p style="color:#000; margin:-5px 0 0 0; font:20px bold tahoma"><?php echo $unvan[$i]; echo " "; echo $isim[$i]; echo " "; echo $soyisim[$n]; ?></p><div class="seckutusudesign"><a href="" class="tikla">Seç</a></div></div>
</div>
 <script type="text/javascript">
   var x = <?php echo $sayac ?>;
 
   if(x==1)
   {
   	 
     document.getElementById("doktor2").style.display="none";
     document.getElementById("doktor3").style.display="none";
     document.getElementById("doktor4").style.display="none";
     
   }
   if(x==2)
   {

     document.getElementById("doktor3").style.display="none";
     document.getElementById("doktor4").style.display="none";
   }
     if(x==2)
   {

     document.getElementById("doktor3").style.display="none";
     document.getElementById("doktor4").style.display="none";
   }
     if(x==3)
   {

   
     document.getElementById("doktor4").style.display="none";
   }
   function doktor1()
   {
      var y = document.getElementById('doktor1').getAttribute('value');
      localStorage.setItem(2, y);  
      window.location.href="RandevuAl3.php";

   }
     function doktor2()
   {
   	 var y = document.getElementById('doktor2').getAttribute('value');
     localStorage.setItem(2, y); 
     window.location.href="RandevuAl3.php";
   }
     function doktor3()
   {
   	 var y = document.getElementById('doktor3').getAttribute('value');
   	 localStorage.setItem(2, y); 
     window.location.href="RandevuAl3.php";
   }
     function doktor4()
   {
   	 var y = document.getElementById('doktor4').getAttribute('value');
     localStorage.setItem(2, y); 
     window.location.href="RandevuAl3.php";

   }
  </script>
</div>
<body>
</body>
</html>
