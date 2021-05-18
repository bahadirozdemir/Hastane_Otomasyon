

function takvimbuton()
{
	x= document.getElementById("tbuton").value;
	if(x=="")
	{
		alert("Lütfen Geçerli Bir Tarih Seçiniz.");
	}
	else
	{
	    localStorage.setItem(5,x);
	    document.getElementById("doktorid").value=localStorage.getItem(2);
	    document.getElementById("form").submit();
	}


}







var tarih=new Date();
window.onload = function() 
{


  

   document.getElementById("saatler").style.display="none";
	var x;
	var saat;
 document.getElementById("tarih").innerHTML=tarih.toLocaleDateString();
setInterval(function()
{
 var date = new Date();
 document.getElementById("saat").innerHTML=date.toLocaleTimeString();	
},1000);




	document.getElementById("body").style.transform="scale(1)";
	document.getElementById("body").style.transition="1s";


}


function dokuz()
{
	window.location.href="#demo-modal";

}
function on()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="10:00";
	document.getElementById("saatveri2").innerHTML="10:15";
	document.getElementById("saatveri3").innerHTML="10:30";
	document.getElementById("saatveri4").innerHTML="10:45";
}
function onbir()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="11:00";
	document.getElementById("saatveri2").innerHTML="11:15";
	document.getElementById("saatveri3").innerHTML="11:30";
	document.getElementById("saatveri4").innerHTML="11:45";
}
function oniki()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="12:00";
	document.getElementById("saatveri2").innerHTML="12:15";
	document.getElementById("saatveri3").innerHTML="12:30";
	document.getElementById("saatveri4").innerHTML="12:45";
	
}
function onuc()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="13:00";
	document.getElementById("saatveri2").innerHTML="13:15";
	document.getElementById("saatveri3").innerHTML="13:30";
	document.getElementById("saatveri4").innerHTML="13:45";
}
function ondort()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="14:00";
	document.getElementById("saatveri2").innerHTML="14:15";
	document.getElementById("saatveri3").innerHTML="14:30";
	document.getElementById("saatveri4").innerHTML="14:45";
}
function onbes()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="15:00";
	document.getElementById("saatveri2").innerHTML="15:15";
	document.getElementById("saatveri3").innerHTML="15:30";
	document.getElementById("saatveri4").innerHTML="15:45";
}
function onalti()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="16:00";
	document.getElementById("saatveri2").innerHTML="16:15";
	document.getElementById("saatveri3").innerHTML="16:30";
	document.getElementById("saatveri4").innerHTML="16:45";
}
function onyedi()
{
	window.location.href="#demo-modal";
	document.getElementById("saatveri1").innerHTML="17:00";
	document.getElementById("saatveri2").innerHTML="17:15";
	document.getElementById("saatveri3").innerHTML="17:30";
	document.getElementById("saatveri4").innerHTML="17:45";
}
function saat9()
{
	var saat=document.getElementById("saatveri1").innerHTML+":00";
    localStorage.setItem(3, saat);
    window.location.href="Randevual4.html";
}
function saat10() 
{
	var saat=document.getElementById("saatveri2").innerHTML+":00";;
	localStorage.setItem(3, saat);
	localStorage.setItem(5,x);
	window.location.href="Randevual4.html";

}

function saat11()
{
	var saat=document.getElementById("saatveri3").innerHTML+":00";;
	localStorage.setItem(3, saat);
	localStorage.setItem(5,x);
	window.location.href="Randevual4.html";

}

function saat12()
{
	var saat=document.getElementById("saatveri4").innerHTML+":00";;
	localStorage.setItem(3, saat);
	localStorage.setItem(5,x);
	window.location.href="Randevual4.html";

}











