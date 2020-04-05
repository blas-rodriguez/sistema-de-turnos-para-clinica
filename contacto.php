<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="https://www.google.com/jsapi"></script>  
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
  
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAHhzikxCQyRAS8ryQoB75mRT2yXp_ZAY8_ufC3CFXhHIE1NvwkxQiqBRnE1Iky5sZfKGxzYbUanZ0HA" type="text/javascript"></script>  

<script type="text/javascript">  
  
function inicializar() {  
if (GBrowserIsCompatible()) {  
var map = new GMap2(document.getElementById("map"));  
map.setCenter(new GLatLng(-29.41346986943206,-66.8562188744545), 15);  
map.addControl(new GMapTypeControl());  
map.addControl(new GLargeMapControl());  
map.addControl(new GScaleControl());  
map.addControl(new GOverviewMapControl());  
//map.addOverlay(new GMarker(new GLatLng(-33.43795,-70.603627)));  
  
function informacion(ubicacion, descripcion) {  
  
var marca = new GMarker(ubicacion);  
GEvent.addListener(marca, "click", function() {  
marca.openInfoWindowHtml(descripcion); } );  
  
return marca;  
  
}  
  
var ubicacion = new GLatLng(-29.41346986943206,-66.8562188744545);  
var descripcion = '<b>centro de Diabetes y Cardiología “Diabe-Car”</b>';  
var marca = informacion(ubicacion, descripcion);  
  
map.addOverlay(marca);  
  
}  
}  
 
</script> 
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Medical Shift</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="index.php" accesskey="1" title="">INICIO</a></li>
				<li><a href="especialidades.php" accesskey="2" title="">ESPECIALIDADES</a></li>
				<li><a href="turnos.php" accesskey="3" title="">TURNOS</a></li>
				<li class="active"><a href="contacto.php" accesskey="4" title="">CONTACTO</a></li>
				<li ><a href="ingresar.php" accesskey="5" title="">Ingresar</a></li>
			</ul>
		</div>
	</div>
	<!--<div id="banner" class="container">-->
		<div class="title">
<center>
el centro está emplazado en calle San Nicolás de Bari  Oeste 968 en la capital de la Provincia de La Rioja Argentina.
<div id="map" style="width:700px; height:300px">  
<script type="text/javascript">inicializar();</script>  
</div> 
 
</center>
		</div>
	<!--</div>-->
</div>


<div id="copyright" class="container">
	
</div>
</body>
</html>
