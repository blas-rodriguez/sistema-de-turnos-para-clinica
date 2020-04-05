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
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="video.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="jquery.ui.datepicker-es.js"></script>
<script src="ajax.js"></script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<script> 
  function abrir(url) { 
                        open(url,'','top=250,left=350,width=300,height=300') ; 
                       }
</script>
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
   var elemento1 = document.getElementById("cont11");
   if(elemento1.style.display = 'none')
     {elemento1.style.display = ' inline';}
   else{
     elemento1.style.display = 'none';}
}


</script>
 <script>
  $(function() {
    $( "#cont11" ).datepicker({
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
   $('#cont11').datepicker({ 
       beforeShowDay: $.datepicker.noWeekends 
   });
});
</script>

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
	<div id="logo">
	<?php
session_start();
include("conexion.php");
//if( !$_REQUEST['boton'] == "INGRESAR" )
if (isset ($_SERVER['primeraPagina']) )
{
echo "<script language='javascript'>
                     alert('NO TIENE LOS PERMISOS PARA ENTRAR A ESTA AREA.');
					 window.location.href = 'index.php';	
              </script>";
}
else
{ 
         
         echo "BIENVENIDO    '".$_SESSION['nombre']."'  ";


?>
 	</div>
		<div id="menu">
			<ul>

				<li class="active"><a href="ingreso.php" accesskey="5" title="">TURNOS RECIENTES</a></li>
				<li><a href="turnosxmes.php" accesskey="5" title="">TURNOS POR MES</a></li>
				<li><a href="consultas.php" accesskey="5" title="">CONSULTAS</a></li>
								<li><a href="otros.php" accesskey="5" title="">OTROS</a></li>
				<li><a href="salir.php" accesskey="5" title="">CERRAR SESION</a></li>
			</ul>
		</div>
	</div>

	<!--<div id="banner" class="container">-->
	<table  border='1' width='850' >
    <tr >
    <td VALIGN=TOP >
		<!--<div class="title">-->
            <h2>ASIGNAR TURNO</h2>
			<div id="menu1">
			 <ul>
			   <li><a href="ingreso.php" title="TUNOS CARGADOS RECIENTEMENTES">Recientes</a></li>
			  <li><a href="turnos1.php" title="ASIGNACION DE TURNOS">Turnos</a></li>
			  <li><a href="eliminados.php" title="TURNOS ELIMINADOS">Eliminados</a></li>
			  <li><a href="confirmados.php" title="TURNOS CONFIRMADOS">Confirmados</a></li>

			 </ul>
			</div>
		<!---</div>-->
	</td >
 <td VALIGN=TOP>
<div id="datos" style="  overflow:auto;
height:400px;   width: 110%">
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
<br />
FECHA DEL TURNO: 
<input type="text"  name="turno" step="1" min="2013-01-01" max="2020-12-31"  id="cont11" onchange="load11(this.value);ver1();" style="display:none;">

<br /><br />
<br />

</div>
</td >
<td VALIGN=TOP>
<div id="myDiv1" style="display:none; 
background: #eeeeee; overflow:auto;
scrollbar-arrow-color : #999999; scrollbar-face-color : #666666;
scrollbar-track-color :#3333333 ; 
height:400px;   width: 60%">

</div>
	</td >
   </tr>
    </table >
	<!--</div>-->
	</div>
	


</body>
</html>
<?php
}
?>
