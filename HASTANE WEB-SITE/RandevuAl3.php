<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSSDOSYALAR/Randevual3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="javascript/Randevual3.js"></script>
<link rel="icon" href="images/Background.png" type="image/x-icon" />
<title>Randevu AL</title>
</head>
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
        <a href="" class="modal__close">&times;</a>
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
<form action="saat.php" method="POST" id="form">
<div style="margin:50px 0 0 20px">
<label id="tarihim" for="birthday" style="color:white; margin:0 0 0 -5px">Randevu Başlangıç Tarihi Seçiniz</label>
<input  style="width:240px; margin:0 0 0 -20px" type="date" id="tbuton" min="<?php echo date("Y-m-d") ?>" name="tbuton" max="2021-05-31">
<input  name="doktorid" id="doktorid" style="display:none"></input>
<button type="button" onclick="takvimbuton()" class="randevubuton">Randevu Bul</button> 
</div>
</form>
</div>
<div id="saatler" class="sagtakvim">
<div class="gunler">
<div class="pazartesi">
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
<div   id="9" onClick="onyedi()" class="buton1">17:00</div>
</div>
</div>
<div class="sali">
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
<div  onClick="onyedi()" class="buton1">17:00</div>
</div>
</div>
<div class="carsamba">
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
<div  onClick="onyedi()" class="buton1">17:00</div>
</div>
</div>
<div class="persembe">
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
<div  onClick="onyedi()" class="buton1">17:00</div>
</div>
</div>
<div class="cuma">
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
<div  onClick="onyedi()" class="buton1">17:00</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
