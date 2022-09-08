<?php
if(isset($_GET['a']))	$a= $_GET['a'];	else $a=1;
if(isset($_GET['b']))	$b= $_GET['b'];	else $b=1;
$a=5;
$b=12;
	print "
	$a*$b = ". $a*$b. "<br>
	$a/$b = ". round($a/$b,2). "<br>
	$a+$b = ". ($a+$b). "<br>
	$a-$b = ". ($a+$b). "<br>
	";
	
?>


<div id='helyadat' style='height:64px; margin:8px 24px;'>

    <input type=button value='Tartózkodási hely meghatározása' onclick='helyadatlekeres();'>

    <p>A helyadatok lekéréséhez nyomja meg a gombot!</p>

</div>



<script>

var x = document.getElementById('helyadat')

function helyadatlekeres()
{
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition( vaneredmeny, nincseredmeny )
    }
    else
    { 
        x.innerHTML = "A Geolocation helymeghatározás nem működik a böngésződben."
    }
}

function vaneredmeny( pozicio )
{
    koordinatak  = pozicio.coords.latitude + "," + pozicio.coords.longitude
    x.innerHTML  = "GPS koordináták: <b>" + koordinatak +"</b><br><br>"
    x.innerHTML += "<a href='https://www.google.at/maps/search/" + koordinatak + "/' target=_blank>Megnézném térképen!</a>"
}

function nincseredmeny( hiba )
{
    switch( hiba.code )
    {
	case hiba.PERMISSION_DENIED:
	    hibaoka = "A felhasználó elutasította a helymeghatározási kérelmet."
	    break;
	case hiba.POSITION_UNAVAILABLE:
	    hibaoka = "A helyadatok nem érhetőek el."
	    break;
	case hiba.TIMEOUT:
	    hibaoka = "Kérelem-időtúllépés történt."
	    break;
	case hiba.UNKNOWN_ERROR:
	    hibaoka = "Ismeretlen hiba történt."
	    break;
    }
    x.innerHTML = "Hiba a helymeghatározás során:<br>" + hibaoka
}

</script>

