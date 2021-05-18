
  function guvenlikkodu()
{
  var kullanicigirisi=document.getElementById("kodgiris").value;
  var kod= document.getElementById("kod").innerHTML; 
  if(kullanicigirisi==kod)
  {
        sonkontrol();
  }
  else
  {
    alert("Güvenlik Kodu Yanlış Tekrar Deneyin.");
        var guvenlikkodu="";
        for (var i =1; i <=6; i++) 
        {
           
            
         guvenlikkodu=guvenlikkodu+String.fromCharCode(48+9*Math.random());
              
       }
       document.getElementById("kod").innerHTML=guvenlikkodu;
  }
}

function sonkontrol()
{

  var kontrolet= confirm("İşlemi Tamamlamak İstediğinize Emin Misiniz ? Geri Dönüş Yapılamayacaktır.");
	if (kontrolet == true) 
	{
          var polid=localStorage.getItem(1);
          var doktorid=localStorage.getItem(2);
          var saat=localStorage.getItem(3);
         var tc=localStorage.getItem(4);
         var tarih=localStorage.getItem(5);        
        	$.ajax({

                 type:"POST",
                 url:"randevu.php",
                 data:{polid,doktorid,saat,tc,tarih},
                 success:function(sonuc)
                 {
                  if(sonuc==1)
                  {
                    document.getElementById("uyari").style.background="#00E676";
                  document.getElementById("uyari").style.display="block";
                 zamantutucu= setInterval(function() {penceregetir()},1000);
                  function penceregetir()
                  {
                    document.getElementById("uyari").style.marginLeft="150px";
                    window.clearInterval(zamantutucu);
                    zamantutucu= setInterval(function() {kapat()},5000);
                    function kapat()
                    {
                      document.getElementById("uyari").style.marginLeft="1330px";
                      window.clearInterval(zamantutucu);
                      window.location.href="Randevual5.php";
                    }

                  }

               
               } 
                
           }

				});
		
	} 

}








