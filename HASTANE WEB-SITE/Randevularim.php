<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geçmiş Randevularım</title>
<link rel="stylesheet" href="CSSDOSYALAR/gecmisrandevu.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="icon" href="images/Background.png" type="image/x-icon" />
</head>
<body background="images/uyeolarkaplan.jpg" style="background-position:center; background-repeat:no-repeat; background-size:cover;" >
<div class="endis">
<?php 
error_reporting(0);
$hastane=array();
$doktor=array(); 
$saat=array();
$poliklinik=array();
$durum=array();
$tarih=array();
$sayac=0;
$veri;
if(isset($_POST['hastano']))
{
   $veri=$_POST['hastano'];

}

 $baglan = @new mysqli('hastaneproje.mysql.database.azure.com', 'kullaniciadi@hastaneproje', 'Sifre:yoruldum', 'hastane_otomasyon');
 $baglan->set_charset("utf8");

 if ($baglan->connect_errno) 
 {
  die("mySQL bağlantısı başarısız oldu: " . $baglan->connect_error);  
 }


 $menusorgu = mysqli_query($baglan,"select *from hastarandevu where TC='$veri'");
 while ($veridizisi = mysqli_fetch_assoc($menusorgu))
 {
    $hastane[$sayac]=$veridizisi["HASTANE"];
    $doktor[$sayac]=$veridizisi["DOKTOR"];
    $saat[$sayac]=$veridizisi["SAAT"];
    $tarih[$sayac]=$veridizisi["TARIH"];
    $poliklinik[$sayac]=$veridizisi["POLIKLINIK"];
    $durum[$sayac]=$veridizisi["DURUM"];
    $sayac++;
 }

 ?>
 <?php 

  




 ?>
<form action="randevuiptal.php" method="POST" id="form">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Hastane Adı</th>
            <th>Doktor Adı</th>
            <th>Bölüm Adı</th>
            <th>Saat ve Tarih</th>
            <th>Randevu Durumu</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $hastane[0] ?></td>
            <td><?php  echo $doktor[0] ?></td>
            <td><?php echo $poliklinik[0] ?></td>
            <td><?php  echo $saat[0]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[0] ?></td>
            <td id="a"><button type=submit id="0" style="width:100px; height:30px; background:red;">İPTAL ET</button></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[0]  ?>';
               if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("0").style.display="none";
                  document.getElementById("a").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("0").style.display="none"
             }
               function gonder()
               {
                    document.getElementById("form").submit();
               }
            </script>
        </tr>
        <tr> 
            
              <td><?php echo $hastane[1] ?></td>
            <td><?php  echo $doktor[1] ?></td>
            <td><?php echo $poliklinik[1] ?></td>
            <td><?php  echo $saat[1]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[1] ?></td>
              <td id="b"><button id="1" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[1]  ?>';
                 if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("1").style.display="none";
                  document.getElementById("b").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("1").style.display="none"
             }
            </script>
      
        </tr>
 <tr>
            <td><?php echo $hastane[2] ?></td>
            <td><?php  echo $doktor[2] ?></td>
            <td><?php echo $poliklinik[2] ?></td>
            <td><?php  echo $saat[2]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[2] ?></td>
              <td id="c"><button id="2" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[2]  ?>';
                 if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("2").style.display="none";
                  document.getElementById("c").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("2").style.display="none"
             }
            </script>
        </tr>
   <tr>
             <td><?php echo $hastane[3] ?></td>
            <td><?php  echo $doktor[3] ?></td>
            <td><?php echo $poliklinik[3] ?></td>
            <td><?php  echo $saat[3]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[3] ?></td>
             <td id="d"><button id="3" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[3]  ?>';
                 if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("3").style.display="none";
                  document.getElementById("d").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("3").style.display="none"
             }
            </script>
        </tr>
  
           <td><?php echo $hastane[4] ?></td>
            <td><?php  echo $doktor[4] ?></td>
            <td><?php echo $poliklinik[4] ?></td>
            <td><?php  echo $saat[4]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[4] ?></td>
               <td id="e"><button id="4" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[4]  ?>';
                 if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("4").style.display="none";
                  document.getElementById("e").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("4").style.display="none"
             }
            </script>
        </tr>
    <tr>
            <td><?php echo $hastane[5] ?></td>
            <td><?php  echo $doktor[5] ?></td>
            <td><?php echo $poliklinik[5] ?></td>
            <td><?php  echo $saat[5]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[5] ?></td>
             <td id="f"><button id="5" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[5]  ?>';
                 if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("5").style.display="none";
                  document.getElementById("f").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("5").style.display="none"
             }
            </script>
        </tr>
     <tr>
             <td><?php echo $hastane[6] ?></td>
            <td><?php  echo $doktor[6] ?></td>
            <td><?php echo $poliklinik[6] ?></td>
            <td><?php  echo $saat[6]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[6] ?></td>
             <td id="g"><button id="6" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[6]  ?>';
                if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("6").style.display="none";
                  document.getElementById("g").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("6").style.display="none"
             }
            </script>
        </tr>
     <tr>
             <td><?php echo $hastane[7] ?></td>
            <td><?php  echo $doktor[7] ?></td>
            <td><?php echo $poliklinik[7] ?></td>
            <td><?php  echo $saat[7]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[7] ?></td>
             <td id="h"><button id="7" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[7]  ?>';
                if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("7").style.display="none";
                  document.getElementById("h").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("7").style.display="none"
             }
            </script>
        </tr>
        <tr>
             <td><?php echo $hastane[8] ?></td>
            <td><?php  echo $doktor[8] ?></td>
            <td><?php echo $poliklinik[8] ?></td>
            <td><?php  echo $saat[8]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[8] ?></td>
             <td id="x"><button id="8" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[8]  ?>';
                if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("8").style.display="none";
                  document.getElementById("x").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("8").style.display="none"
             }
            </script>
        </tr>
        <tr>
             <td><?php echo $hastane[9] ?></td>
            <td><?php  echo $doktor[9] ?></td>
            <td><?php echo $poliklinik[9] ?></td>
            <td><?php  echo $saat[9]."&nbsp","&nbsp","&nbsp","&nbsp". $tarih[9] ?></td>
             <td id="y"><button id="9" style="width:100px; height:30px; background:red;">İPTAL ET</button></></td>
             <script type="text/javascript">    
               var x='<?php echo $durum[9]  ?>';
               if(x!="")
               {
               if(x=="AKTIF")
               {
                 
               }
               else
               {
                  document.getElementById("9").style.display="none";
                  document.getElementById("y").innerHTML="İPTAL EDİLMİŞ";
                
               }
             }
             else
             {
               document.getElementById("9").style.display="none"
             }
            </script>
        </tr>
     

        <tbody>
    </table>
</div>
</form>
</div>
</body>
</html>