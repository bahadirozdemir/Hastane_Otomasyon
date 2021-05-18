<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSSDOSYALAR/sifremiunuttum.css">
<script type="text/javascript" language="javascript" src="javascript/sifremiunuttum.js"></script>
<link rel="icon" href="images/Background.png" type="image/x-icon" />
<title>Başlıksız Belge</title>
</head>
<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;">
<div class="endis">
<div class="sifremiunuttumpencere">
<div class="buyuklogo"><img src="images/indir-removebg-preview (2).png"></div>
<div style="margin:120px 0 0 60px"><h1>Şifremi Unuttum</h1></div>
<div style="margin:10px 0 0 60px; color:#000; font-size:10px"><h1>Tüm alanların doldurulması zorunludur.</h1></div>
<div  style="margin:40px 0 0 135px; color:#D50000; font-size:10px;"><h1 id="hatamesaj"></h1></div>
<form action="sifremiunuttum2.php" id="form" method="POST">
    <div class="form" style="margin:-90px 0 0 0">
      <span >
       <input id="tcno" placeholder="T.C Kimlik Numaranızı Girin." name="tcno" type="number" />
    </span>
    <br />    <br />   <br />  
     <span>
       <input id="email" name="email" placeholder="E-Mail Adresinizi Girin." type="text" />
    </span>
        <br />    <br />   <br /> 
      <span >
       <input id="sifre" placeholder="Yeni Şifrenizi Girin." name="sifre" type="number" />
    </span>
    <br />    <br />   <br />  
          <span >
       <input id="yenisifre" placeholder="Yeni Şifrenizi Tekrar Girin." name="sifre2" type="number" />
    </span>
    </form>
  <div class="textt-box" id="bt" onclick="kontrolet()"><a href="#" class="btn btn-white btn-animate">Gönder</a></div>
</div>
</body>
</html>
