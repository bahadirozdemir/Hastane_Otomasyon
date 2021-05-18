<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSSDOSYALAR/Randevual3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/saat.js"></script>
<link rel="icon" href="images/Background.png" type="image/x-icon" />
<title>Randevu AL</title>
</head>
<?php
$p=0;
$s=0;
$ca=0;
$pe=0;
$c=0;
$x=0;
  $tarih=$_POST["tbuton"];
  $id=$_POST["doktorid"];

 $baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error); 
 }
 
 
$gelentarih=$tarih;
while ($x!=1) 
{
  

$gelentarih=explode ("-",$gelentarih);
$yenizaman=date("l",mktime(0,0,0,$gelentarih[1],$gelentarih[2],$gelentarih[0]));
if($yenizaman!="Friday")
{
  $yenizaman=date("Y-m-d",mktime(0,0,0,$gelentarih[1],$gelentarih[2],$gelentarih[0]));
  $yenizaman++;
  $gelentarih=$yenizaman;
}
else
{
  $x=1;
}

}
  $yenizaman=date("Y-m-d",mktime(0,0,0,$gelentarih[1],$gelentarih[2],$gelentarih[0]));
 $menusorgu = mysqli_query($baglan,"select DAYNAME(TARIH) from doktorsaat where DOKTOR_NO='$id' and TARIH >= '$tarih' and TARIH <= '$yenizaman'");
 while ($veridizisi = mysqli_fetch_assoc($menusorgu))
 {
      $veri=$veridizisi["DAYNAME(TARIH)"];
      if($veri=="Monday")
      {
        $p++;
      }
      if($veri=="Tuesday")
      {
        $s++;
      }
      if($veri=="Wednesday")
      {
         $ca++;
      }
      if($veri=="Thursday")
      {
          $pe++;
      }
      if($veri=="Friday")
      {
          $c++;
      }

 }; 

?>
<body id="body" background="images/randevu.jpg" style="background-position:center; transform:scale(3); background-repeat:no-repeat;background-size:cover;">
<div class="endis">
<div id="numara" class="numaralar">
<div class="cizgi1"></div>
<div class="cizgi2"></div>
<div class="cizgi3"></div>
<div class="cizgi4"></div>
<div class="numara1"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">5</div></div>
<div  class="numara2"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif">4</div></div>
<div  class="numara3"><div style="width:10px; height:10px; border-radius:200px; margin:20px auto; font:20px bold Tahoma, Geneva, sans-serif; color:#FFF;">3</div></div>
<div  class="numara4"><div class="tickduzen"><img src="images/gif/unnamed-removebg-preview (2).png"></div></div>
<div  class="numara5"><div class="tickduzen"><img src="images/gif/unnamed-removebg-preview (2).png"></div></div>
</div>
<div id="randevucerceve" class="randevucercevesi">
<div id="demo-modal" class="modal">
    <div class="modal__content">
        <h1>Lütfen Bir Saat Seçiniz</h1>
        <div class="butonduzen">
        <div  onClick="saat9()" id="saatveri1" class="buton2">09:00</div>
        &#160
        <div onClick="saat10()" id="saatveri2"  class="buton2">09:15</div>     
        &#160  
        <div  onClick="saat11()" id="saatveri3" class="buton2">09:30</div>    
        &#160
        <div onClick="saat12()" id="saatveri4" class="buton2">09:45</div>    
        &#160    
        </div>
    
    </div>
</div>
<div class="soltakvim">
<h1 style="text-align:center; color:#FFF; margin:100px 0 0 0; font:30px italic Tahoma, Geneva, sans-serif">Tarih ve Saat</h1>
<div class="tarih">
<h1 id="tarih" style="text-align:center; color:#FFF; margin:40px 0 0 0;  font:24px italic Tahoma, Geneva, sans-serif"></h1>
</div>
<div class="zaman">
<h1 id="saat" style="text-align:center; color:#FFF;font:24px italic Tahoma, Geneva, sans-serif"></h1>
</div>
</div>
<div id="saatler" class="sagtakvim">
<div class="gunler">
<div class="pazartesi" id="pazartesi">
<h1 name="pazartesi" style="text-align:center; color:#FFF;font:20px italic Tahoma, Geneva, sans-serif">Pazartesi</h1>
<div class="takvimcizgi"></div>
<div class="butonlar">
<div  id="1" onClick="dokuz()" class="buton1">09:00</div>
<div   id="2" onClick="on()" class="buton1">10:00</div>
<div   id="3" onClick="onbir()" class="buton1">11:00</div>
<div   id="4" onClick="oniki()" class="buton1">12:00</div>
<div   id="5" onClick="onuc()" class="buton1">13:00</div>
<div   id="6" onClick="ondort()" class="buton1">14:00</div>
<div   id="7" onClick="onbes()" class="buton1">15:00</div>
<div   id="8" onClick="onalti()" class="buton1">16:00</div>
</div>
</div>
<div class="sali" id="sali">
<h1 style="text-align:center; color:#FFF;font:20px italic Tahoma, Geneva, sans-serif">Salı</h1>
<div class="takvimcizgi"></div>
<div class="butonlar">
<div  onClick="dokuz()" class="buton1">09:00</div>
<div  onClick="on()" class="buton1">10:00</div>
<div  onClick="onbir()" class="buton1">11:00</div>
<div  onClick="oniki()" class="buton1">12:00</div>
<div  onClick="onuc()" class="buton1">13:00</div>
<div  onClick="ondort()" class="buton1">14:00</div>
<div  onClick="onbes()" class="buton1">15:00</div>
<div  onClick="onalti()" class="buton1">16:00</div>
</div>
</div>
<div class="carsamba" id="carsamba">
<h1 style="text-align:center; color:#FFF;font:20px italic Tahoma, Geneva, sans-serif">Çarşamba</h1>
<div class="takvimcizgi"></div>
<div class="butonlar">
<div  onClick="dokuz()" class="buton1">09:00</div>
<div  onClick="on()" class="buton1">10:00</div>
<div  onClick="onbir()" class="buton1">11:00</div>
<div  onClick="oniki()" class="buton1">12:00</div>
<div  onClick="onuc()" class="buton1">13:00</div>
<div  onClick="ondort()" class="buton1">14:00</div>
<div  onClick="onbes()" class="buton1">15:00</div>
<div  onClick="onalti()" class="buton1">16:00</div>
</div>
</div>
<div class="persembe" id="persembe">
<h1 style="text-align:center; color:#FFF;font:20px italic Tahoma, Geneva, sans-serif">Perşembe</h1>
<div class="takvimcizgi"></div>
<div class="butonlar">
<div  onClick="dokuz()" class="buton1">09:00</div>
<div  onClick="on()" class="buton1">10:00</div>
<div  onClick="onbir()" class="buton1">11:00</div>
<div  onClick="oniki()" class="buton1">12:00</div>
<div  onClick="onuc()" class="buton1">13:00</div>
<div  onClick="ondort()" class="buton1">14:00</div>
<div  onClick="onbes()" class="buton1">15:00</div>
<div  onClick="onalti()" class="buton1">16:00</div>
</div>
</div>
<div class="cuma" id="cuma">
<h1 style="text-align:center; color:#FFF;font:20px italic Tahoma, Geneva, sans-serif">Cuma</h1>
<div class="takvimcizgi"></div>
<div class="butonlar">
<div  onClick="dokuz()" class="buton1">09:00</div>
<div  onClick="on()" class="buton1">10:00</div>
<div  onClick="onbir()" class="buton1">11:00</div>
<div  onClick="oniki()" class="buton1">12:00</div>
<div  onClick="onuc()" class="buton1">13:00</div>
<div  onClick="ondort()" class="buton1">14:00</div>
<div  onClick="onbes()" class="buton1">15:00</div>
<div  onClick="onalti()" class="buton1">16:00</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
   var p=<?php echo $p  ?>;
   var s=<?php echo $s  ?>;
   var ca=<?php echo $ca  ?>;
   var pe=<?php echo $pe  ?>;
   var c=<?php echo $c  ?>;
   var sayac=0;
   if(p==0)
   {  
      document.getElementById("pazartesi").style.display="none";
      sayac++;
    
   }
   if(s==0)
   {
      document.getElementById("sali").style.display="none";
      sayac++;
      
   }
   if(ca==0)
   {
      document.getElementById("carsamba").style.display="none";
      sayac++;
   }
   if(pe==0)
   {
      document.getElementById("persembe").style.display="none";
      sayac++;
      
   }
   if(c==0)
   {
     document.getElementById("cuma").style.display="none";
     sayac++;
     
   }
   if(sayac==5)
   {
    zaman2=setInterval(function() {gecikme()},1000);
    function gecikme()
    {
    alert("Seçmiş Olduğunuz Tarihte Bir Randevu Bulunamamıştır.");
    zaman2=clearInterval(zaman2);
    window.location.href="Randevual3.php";
    }
    
   }

  </script>
</div>
</body>
</html>
