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
<link rel="stylesheet" type="text/css" href="video.css">
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<script> 
  function abrir(url) { 
                        open(url,'','top=250,left=350,width=300,height=300') ; 
                       }
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
				<li ><a href="ingreso.php" accesskey="5" title="">TURNOS RECIENTES</a></li>
				<li><a href="turnosxmes.php" accesskey="5" title="">TURNOS POR MES</a></li>
				<li class="active"><a href="consultas.php" accesskey="5" title="">CONSULTAS</a></li>
				<li><a href="otros.php" accesskey="5" title="">OTROS</a></li>
				<li><a href="salir.php" accesskey="5" title="">CERRAR SESION</a></li>
			</ul>
		</div>
	</div>

	<!--<div id="banner" class="container">-->
	<table  border='0'  >
    <tr >
    <td VALIGN=TOP >
		<!--<div class="title">-->
            <h2>TURNOS RECIENTES</h2>
			<div id="menu1">
			 <ul>
			  <li><a href="consultas.php" title="TUNOS CARGADOS RECIENTEMENTES">turnos por especialidad</a></li>
			  <li><a href="consultasprofes.php" title="ASIGNACION DE TURNOS">turnos por profesional</a></li>
			  <li><a href="consultasos.php" title="TURNOS ELIMINADOS">turnos por obra social</a></li>
			  <li><a href="consultaselimi.php" title="TURNOS CONFIRMADOS">turnos eliminados</a></li>
			  <li><a href="totales.php" title="TURNOS CONFIRMADOS">totales</a></li>
			 </ul>
			</div>
		<!---</div>-->
	</td >
 <td >
<div id=scrolltable style="  overflow:auto;
border-right:  #6699CC 1px solid; border-top: #999999 1px solid;
border-left: #6699CC 1px solid; border-bottom:  #6699CC 1px solid;
scrollbar-arrow-color : #999999; scrollbar-face-color : #666666;
scrollbar-track-color :#3333333 ; 
height:300px;   width: 101%">
          <form  action='lista2.php' target='_blank' method='post'>
		            <center>
          		<label for="AppointmentsSpecialitySpeciality">ESPECIALIDAD</label>
			<?php
			//$res=mysqli_query("select * from continente",$con);
			$res = mysqli_query($conexion, "SELECT * FROM especialidades "); 
			?>
			<select name="sele1" id="cont"  onchange="load22(this.value)">
			<option value="">Seleccione</option>
			<?php
			
			while($fila=mysqli_fetch_array($res)){
			//while($row =  mysqli_fetch_array($result)) 
			?>
			
			<option value="<?php echo $fila['codigo']; ?>"><?php echo trim($fila['especialidad']); ?></option>
			
			<?php } ?>
			</select>
		  <br /><br />

		  <font color='#6CC'>DESDE: </font>
          <input name='desde' type='date'/>
		  <font color='#6CC'>HASTA: </font>
          <input name='hasta' type='date'/>
	      <br><br>
		   <center><input type='submit' class='button' value='INGRESAR' name='boton'></center>
		  

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
