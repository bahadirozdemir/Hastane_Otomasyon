window.onload = function() 
{
	
	document.getElementById("body").style.transform="scale(1)";
	document.getElementById("body").style.transition="1s";
	document.getElementById("tc").value=localStorage.getItem(4);
} 



function fonksiyon()
{
	document.getElementById("header").action = "Randevularim.php";
	document.getElementById("header").submit();
}
function fonksiyon2()
{
	document.getElementById("header").action = "TahlilSonuclarim.php";
	document.getElementById("header").submit();
}
function fonksiyon3()
{
	document.getElementById("header").action = "Hesabim.php";
	document.getElementById("header").submit();
}
