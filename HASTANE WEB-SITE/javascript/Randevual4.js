window.onload = function() 
{

   var guvenlikkodu="";
   for (var i =1; i <=6; i++) 
   {
   	 
   	 
        guvenlikkodu=guvenlikkodu+String.fromCharCode(48+9*Math.random());
   	    
   }
   document.getElementById("kod").innerHTML=guvenlikkodu;
	var dakika=2;
	var saniye="59";
	var zaman;
	zaman=setInterval(function() {gerisayim()},1000);
	function gerisayim()
	{
		if(dakika==0 && saniye==0)
		{
			window.clearInterval(zaman);
			alert("Süre Bitti Ana Sayfaya Yönlendiriliyorsunuz."); 
			zaman2=setInterval(function() {sayfayayonlendir()},2000);
			function sayfayayonlendir()
			{
				
				window.location.href="Ana_Sayfa.html";
				window.clearInterval(zaman2);
			}
		}
		else if(saniye==0)
		{
			dakika--;
			saniye=59;
			document.getElementById("sayac").innerHTML="Kalan Zaman : "+"0"+dakika+":"+saniye;
		}
		else if(saniye!=0)
		{
			saniye--;
			document.getElementById("sayac").innerHTML="Kalan Zaman : "+"0"+dakika+":"+saniye;
		}
		
	}
}


