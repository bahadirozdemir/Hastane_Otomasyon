

function guncelle()
{ 
   if(document.getElementById("1").value=="" || document.getElementById("2").value=="")
   {
   	  alert("Lütfen Boş Alanları Doldurun.");
   }
 else
 {
   document.getElementById("tc").value=localStorage.getItem(4);

   var sifre=document.getElementById("2").value;
   var sifre2=localStorage.getItem(6);
   

   if(sifre==sifre2)
   { 
      document.getElementById("uyeolform").submit();
   }
   else
   {
   	 alert("Şifreniz Hatalı Tekrar Deneyin.");
   }
}
	

}
function guncelle2()
{ 
   if(document.getElementById("1").value=="" || document.getElementById("2").value=="")
   {
      alert("Lütfen Boş Alanları Doldurun.");
   }
 else
 {
   document.getElementById("tc").value=localStorage.getItem(4);

   var sifre=document.getElementById("2").value;
   var sifre2=localStorage.getItem(6);
   

   if(sifre==sifre2)
   { 
      document.getElementById("uyeolform").submit();
   }
   else
   {
     alert("Şifreniz Hatalı Tekrar Deneyin.");
   }
}
  

}
function guncelle3()
{ 
   if(document.getElementById("1").value=="" || document.getElementById("2").value=="")
   {
        alert("Lütfen Boş Alanları Doldurun.");
   }
 else
 {
   document.getElementById("tc").value=localStorage.getItem(4);

   var sifre=document.getElementById("2").value;
   var sifre2=localStorage.getItem(6);
   

   if(sifre==sifre2)
   { 
      document.getElementById("uyeolform").submit();
   }
   else
   {
       alert("Şifreniz Hatalı Tekrar Deneyin.");
   }
}
   

}
