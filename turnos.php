<?php
session_start();
include("conexion.php");
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

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<!-- / END -->
<link rel="stylesheet" type="text/css" href="sweetalert.css">
<link rel="stylesheet" type="text/css" href="smoke.css">
<link rel="stylesheet" type="text/css" href="video.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="jquery.ui.datepicker-es.js"></script>
<script src="funciones.js" language="JavaScript"></script>
<script src="ajax.js"></script>
<script>
function ver(){
   var elemento = document.getElementById("capa");
   if(elemento.style.display = 'none')
     {elemento.style.display = 'block';}
   else{
     elemento.style.display = 'none';}
}
function ver1(){
   var elemento1 = document.getElementById("myDiv1");
   if(elemento1.style.display = 'none')
     {elemento1.style.display = 'block';}
   else{
     elemento1.style.display = 'none';}
}
function ver2(){
   var elemento1 = document.getElementById("cont1");
   if(elemento1.style.display = 'none')
     {elemento1.style.display = ' inline';}
   else{
     elemento1.style.display = 'none';}
}


</script>
  <script>
  $(function() {
    $( "#cont1" ).datepicker({
firstDay: 1,
beforeShowDay: $.datepicker.noWeekends,
monthNames: ['Enero', 'Febrero', 'Marzo',
'abril', 'Mayo', 'Junio',
'Julio', 'Agosto', 'Septiembre',
'Octubre', 'Noviembre', 'Diciembre'],
dayNamesMin: ['Dom', 'Lun', 'mar', 'Mie', 'Jue', 'Vie', 'Sab']

});
  });
  </script>
  <script>
  $(function() {
   $('#cont1').datepicker({ 
       beforeShowDay: $.datepicker.noWeekends 
   });
});
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
				<li class="active"><a href="turnos.php" accesskey="3" title="">TURNOS</a></li>
				<li><a href="contacto.php" accesskey="4" title="">CONTACTO</a></li>
				<li><a href="ingresar.php" accesskey="5" title="">Ingresar</a></li>
			</ul>
		</div>
	</div>
<div class="title">

<center>
<table  border='1' WIDTH=90%  CELLPADDING=0  CELLSPACING=10>
<tr >
<td >

<label for="Name">DNI:</label>
<input type="number"  id="Name" name="dni" id="cont" onkeyup="load8(this.value)" onclick="load8(this.value)" maxlength="8"/><br /><br />
<label for="Name">APELLIDO Y NOMBRE:</label>
<input type="text" id="Name" name="nobre" id="cont" onkeyup="load7(this.value)" onclick="load7(this.value)" style="text-transform:uppercase;"/><br /><br />
<label for="Name">DOMICILIO:</label>
<input type="text" id="Name" name="dom" id="cont" onkeyup="load6(this.value)" onclick="load6(this.value)" style="text-transform:uppercase;"/><br /><br />
<label for="Name">TELEFONO:</label>
<input type="text" id="Name" name="tel" id="cont" onkeyup="load5(this.value)" onclick="load5(this.value)" style="text-transform:uppercase;"/><br /><br />
<label for="Name">OBRA SOCIAL:</label>
<input type="text" id="Name" name="os" id="cont" onkeyup="load4(this.value)" onclick="load4(this.value)" style="text-transform:uppercase;"/><br />
<label for="Name" style="display:none;" id="cont2"><font color="RED">LA OBRA SOCIAL SOLO OPERA LOS MARTES, MIERCOLES Y JUEVES</font></label><br />
<label for="Name" >NUMERO DE AFILIADO:</label>
<input type="text" id="Name" name="nroafi" onkeydown="javascript:ver();"  id="cont"  onkeyup="load3(this.value)" onclick="load3(this.value)" style="text-transform:uppercase;"/><br />
<br />
</td >
<td >
<div id="capa" style="display:none;">
<label for="AppointmentsSpecialitySpeciality">ESPECIALIDAD</label>
<?php
//$res=mysqli_query("select * from continente",$con);
$res = mysqli_query($conexion, "SELECT * FROM especialidades "); 
?>
<select name="sele1" id="cont" onchange="load(this.value)">
<option value="">Seleccione</option>
<?php

while($fila=mysqli_fetch_array($res)){
//while($row =  mysqli_fetch_array($result)) 
?>

<option value="<?php echo $fila['codigo']; ?>"><?php echo trim($fila['especialidad']); ?></option>

<?php } ?>

</select>
<br /><br />
<div id="myDiv">
<label for="AppointmentsSpecialitySpeciality">MEDICO </label>
<select name="sele2" id="cont" onchange="load2(this.value)" onclick="javascript:ver2();">
<option value="">Seleccione</option>
</select>
</div>
<br /><br />
FECHA DEL TURNO: 
<input type="text"  name="turno" step="1" min="2013-01-01" max="2020-12-31"  id="cont1" onchange="load1(this.value);ver1();" style="display:none;">

<br /><br />
<br />
</div>
</td >
</tr>
</table >

<div id="myDiv1" style="display:none;">

							<?php

$q=date('Y-m-d');
$q1=1;
$q2=1;
$sql1="SELECT * from especialidades where codigo=".$q1;
	    $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
	 
	$combobit="";
	if ($result1->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
		
		while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
		{
			$combobit .=$row1['especialidad']; //concatenamos el los options para luego ser insertado en el HTML
		}
	}
	
	$sql2="SELECT * from profesionales where codigo=".$q2;
	 $result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
	 
	$med="";
	if ($result2->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
		
		while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) 
		{
			$med.=$row2['profesional']; //concatenamos el los options para luego ser insertado en el HTML
		}
	}

//ak tiene q ir la parte sql
	 echo("<font color='blue' size=4>TURNOS CARGADOS PARA:  ".date('Y-m-d')."<br /><br /> ESPECIALIDAD:".$combobit."<br /><br /> MEDICO: ".$med."</font><br><br>");
	 $fe=date("d/m/y");
     
	 echo "<table id='simple' border='5' class='tablebonita'>"; //EMPIEZA A CREAR LA TABLA 
	 echo "<center>","<thead>","<tr>";//<tr> CREA UNA NUEVA FILA 
	 echo "<th scope='col'>HORA </th>";
	 echo "<th scope='col'>ESPECIALIDAD </th>";//encabezado
	 echo "<th scope='col'>MEDICO</th>";
	 echo "<th scope='col'>ESTADO</th>";	 
	 echo "</tr>","</thead>","</center>";
	 
		$hi=19;
		$mi="00";
		$mi1=00; 
for ($h = 0; $h < 3; $h++) {
  for ($m = 0; $m < 4; $m++) {
	       $hf=$hi.":".$mi.":"."00";
		   $result = mysqli_query($conexion, "SELECT * FROM turnos where fecha='".$q."'and hora='".$hf."' and codesp='".$q1."' and codmed='".$q2."' order by hora"); 
	 $i=-1;
	 if (mysqli_num_rows($result)>0)
	 {	 
	     while($row =  mysqli_fetch_array($result)) 
	     {
		   	echo "<tr style='background-color: RED;'>";
			echo "<td >$hf</td>";
			echo "<td >"."</td>";
			echo "<td >"."</td>";
	        echo "<td >OCUPADO</td>";			
		    echo "</tr>";
		 }
	 }
	 else{
		    echo "<tr>";
			echo "<td >$hf</td>";
			echo "<td >"."</td>";
			echo "<td >"."</td>";
	echo "<td ><center><input type='submit' value='ASIGNAR' name='boton'></center></td>";			
		    echo "</tr>";
		}
		
		  if($mi>=45){$mi="00";}
		  else{$mi=$mi+15;}
  }
  $hi=$hi+1;
}  

?>
</div>
</center>
</div>
</div>
</div>

<!-- / END -->
</div>
<div id="wrapper">
	<div id="three-column" class="container">
		<div class="title">
			<h2>Feugiat lorem ipsum dolor sed veroeros</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<div class="boxA">
			<p>Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad  torquent per conubia nostra.</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
		<div class="boxB">
			<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam  wisi a sem semper eleifend. Donec mattis. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc.</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
		<div class="boxC">
			<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc.</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
	</div>
</div>
<div id="welcome">
	<div class="container">
		<div class="title">
			<h2>Fusce ultrices fringilla metus</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<p>This is <strong>Assembly</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
