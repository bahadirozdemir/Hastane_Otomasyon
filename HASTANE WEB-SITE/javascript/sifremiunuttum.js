function kontrolet()
{


if(document.getElementById("tcno").value=="" || document.getElementById("email").value=="" || document.getElementById("sifre").value=="" || document.getElementById("yenisifre").value=="")
{
	alert("Lütfen Boş Alanları Doldurunuz.");
}
else
{
	var x = document.getElementById("sifre").value;
	var y=document.getElementById("yenisifre").value;

	if(x!=y)
	{
		alert("Girdiğiniz Yeni Şifreler Uyuşmuyor");
	}
	else
	{
	    document.getElementById("form").submit();
	}    
}



}