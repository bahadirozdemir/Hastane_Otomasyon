<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">  
  <title>Hesabım</title>
  <link rel="stylesheet" href="CSSDOSYALAR/maildegis.css">
  <link rel="icon" href="images/Background.png" type="image/x-icon" />
  <script type="text/javascript" language="javascript" src="javascript/maildegis.js"></script>
</head>
<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;" >
<div class="endis">
<div class="bilgilerim">
<div class="baslik">TELEFON NUMARAMI GÜNCELLE</div>
<div class="cizgi1"></div>
<div class="container">
<form name="iletisimformu" action="teldegis.php" method="POST" id="uyeolform" >
    <input id="tc" name="hastano" style="display:none"></input>
    <div class="form">
      <span >
       <input id="1" name="tel" maxlength="11" placeholder="Yeni Telefon Numaranızı Girin."type="text" />
    </span>
    <br />
     <span>
       <input id="2" name="sifre" placeholder="Şifrenizi Girin." type="password"/>
    </span>
    <span>
    </div>
  </form>
</div>
<div onclick="guncelle2()" id="kayitolbuton" class="textt-box"><a href="#" class="btn btn-white btn-animate">Güncelle</a></div>
</div>
</div>
</body>
</html>  