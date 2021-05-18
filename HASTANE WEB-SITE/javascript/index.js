 function kapat()
       {
         document.getElementById("uyari").style.marginLeft="1600px";
        window.clearInterval(zamantutucu);
      
        }
function kontrol()
{

  var sayi=4;
  var tcno = $("input[name='tcno']").val();
  var sifre=$("input[name='sifre']").val();
 	$.ajax({
 
             
                 type:"POST",
                 url:"indeks.php",
                 data:{tcno,sifre},
                 success:function(sonuc)
                 {
                       

if(sonuc==1) 
 {
 var hastaid=document.getElementById("tcno").value; 
 var dogrusifre=document.getElementById("sifre").value; 
 localStorage.setItem(4,hastaid);  
 localStorage.setItem(6,dogrusifre);
 document.getElementById("uyari").style.display="block";
 document.getElementById("uyari").style.background="#00E676";
   document.getElementById("yazi").innerHTML="Giriş Başarılı Sizi Yönlendiriyorum.";
   zamantutucu= setInterval(function() {penceregetir()},1000);
   function penceregetir()
     {
       document.getElementById("uyari").style.marginLeft="415px";
      window.clearInterval(zamantutucu);
      zamantutucu= setInterval(function() {kapat()},5000);
      function kapat()
       {
         document.getElementById("uyari").style.marginLeft="1600px";
        window.clearInterval(zamantutucu);
      
        }
        setInterval(function(){sayiyiyiazalt()},1000);
       }
  
  function sayiyiyiazalt()
  {
    if(sayi==1)
    {
      
      gecisyap();
    }
    else
    {
    sayi--;
    }
    
  }
  function gecisyap()
  {
    
    window.location.href="Ana_Sayfa.php";
  }

}
else
{
   document.getElementById("uyari").style.display="block";
   zamantutucu= setInterval(function() {penceregetir()},1000);
   function penceregetir()
     {
       document.getElementById("uyari").style.marginLeft="415px";
      window.clearInterval(zamantutucu);
      zamantutucu= setInterval(function() {kapat()},5000);
      function kapat()
       {
         document.getElementById("uyari").style.marginLeft="1600px";
        window.clearInterval(zamantutucu);
        }

       }
}
                     
  }                
                 

    });
}
