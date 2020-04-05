<?php
session_start();
include("conexion.php");
$code=trim($_GET['code']);
$codm=trim($_GET['codm']);
$fec=trim($_GET['fec']);
$hr=trim($_GET['hr']);
$fa = date('Y-m-d ');
$dni=$_GET['dni'];
$nombre=$_GET['nom'];
$dom=$_GET['dom'];
$tel=$_GET['tel'];
$os=$_GET['os'];
$nro=$_GET['nro'];
//echo $dni;
//$hora=date('H:i:s ');
//modifico la tabla
$dias = array("Domingo", "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
$fecha = $dias[date("N", strtotime($fec))];
 
if(trim($os)=="pami"){
  if($fecha=="Martes" or $fecha=="Miercoles" or $fecha=="Jueves"){
		 echo "<script language='javascript'>
                     alert('LA OBRA SOCIAL 'PAMI' NO PUEDE ASIGNAR TURNOS PARA LOS DIAS MARTES, MIERCOLES Y JUEVES .');
					 window.location.href = 'index.php';	
              </script>";    
	     exit;
		 }
  else
   {
   if (!empty($code))
 { 
		$sql1= mysqli_query($conexion,"INSERT INTO turnos (codesp, codmed, fecha, hora, fechaalta, dni, nombre, domicilio, telefono, os, nroafiliado) VALUES ('$code','$codm','$fec' ,'$hr', '$fa', '$dni', '$nombre', '$dom', '$tel', '$os', '$nro')");
	     if (!$sql1) 
		 {
            die('Consulta no válida: ' . mysql_error());
          }

		 echo "<script language='javascript'>
                     alert('EL TURNO FUE CARGADO CON EXITO.');
					 window.location.href = 'index.php';	
              </script>";    
	     exit;
 }
   
   }
}
else{
if (!empty($code))
 { 
		$sql1= mysqli_query($conexion,"INSERT INTO turnos (codesp, codmed, fecha, hora, fechaalta, dni, nombre, domicilio, telefono, os, nroafiliado) VALUES ('$code','$codm','$fec' ,'$hr', '$fa', '$dni', '$nombre', '$dom', '$tel', '$os', '$nro')");
	     if (!$sql1) 
		 {
            die('Consulta no válida: ' . mysql_error());
          }

		 echo "<script language='javascript'>
                     alert('EL TURNO FUE CARGADO CON EXITO.');
					 window.location.href = 'index.php';	
              </script>";    
	     exit;
 }
 }
?>