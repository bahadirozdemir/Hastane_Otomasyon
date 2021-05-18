 function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};

 function kapat()
       {
         document.getElementById("uyari").style.marginLeft="1600px";
        window.clearInterval(zamantutucu);
      
        }
function fonksiyon()
		{

             var zamantutucu;
             var sayi=2;
			if(document.getElementById("1").value=="" || document.getElementById("2").value=="" || document.getElementById("3").value=="" || document.getElementById("4").value=="" || document.getElementById("5").value=="" || document.getElementById("6").value=="" || document.getElementById("7").value=="" || document.getElementById("8").value=="")
			{

				alert("Lütfen Boş Alanları Doldurunuz.");
			}
			else 
			{     
			    
				var tcno = $("input[name='tcno']").val();
				var ad=$("input[name='ad']").val();
				var soyad = $("input[name='soyad']").val();
				var dtarih=$("input[name='dtarih']").val();
				var cinsiyet = $("input[name='cinsiyet']").val();
				var tel=$("input[name='tel']").val();
        var mail=$("input[name='mail']").val();
        var sifre=$("input[name='sifre']").val();
 
 
				
				$.ajax({

                 type:"POST",
                 url:"uyeol.php",
                 data:{tcno,ad,soyad,dtarih,cinsiyet,tel,mail,sifre},
                 success:function(sonuc)
                 {
                  if(sonuc==1)
                  {
                  document.getElementById("uyari").style.display="block";
                 zamantutucu= setInterval(function() {penceregetir()},1000);
                  function penceregetir()
                  {
                    document.getElementById("uyari").style.marginLeft="75px";
                    window.clearInterval(zamantutucu);
                    zamantutucu= setInterval(function() {kapat()},5000);
                    function kapat()
                    {
                      document.getElementById("uyari").style.marginLeft="720px";
                      window.clearInterval(zamantutucu);
                    }

                  }

               
               } 
                else
               {
                   document.getElementById("uyari").style.display="block";
                    document.getElementById("yazi").innerHTML="Kayıt Başarılı Sizi Yönlendiriyorum.";
                    document.getElementById("Dikkat").innerHTML="Başarılı!";
                 zamantutucu= setInterval(function() {penceregetir()},1000);
                  document.getElementById("uyari").style.background="#00E676";
                  function penceregetir()
                  {
                    document.getElementById("uyari").style.marginLeft="75px";
                    window.clearInterval(zamantutucu);
                    zamantutucu= setInterval(function() {sayfagec()},1000);
                  function sayfagec()
                  {
                     if(sayi==0)
                     { 
                      window.clearInterval(zamantutucu);
                        window.location.href="index.html";
                     }
                     else
                     {
                      sayi--;
                     }
                  }
                }


             }
           }

				});
			}
} 
	
  