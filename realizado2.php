 
<?php
session_start();
include("conexion.php");
$code=$_REQUEST['cesp'];
$codm=$_REQUEST['cmed'];
$fec=trim($_REQUEST['fc']);
$hr=trim($_REQUEST['hr']);
$fa = date('Y-m-d ');
$dni=$_REQUEST['dni'];
$nombre=$_REQUEST['nobre'];
$dom=$_REQUEST['dom'];
$tel=$_REQUEST['tel'];
$os=$_REQUEST['os'];
$nro=$_REQUEST['nroafi'];
$usu=$_SESSION['nombre'];
//echo $dni;
//$hora=date('H:i:s ');
//modifico la tabla
$dias = array("Domingo", "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
$fecha = $dias[date("N", strtotime($fec))];
 
if(trim($os)==2){
  if($fecha=="Martes" or $fecha=="Miercoles" or $fecha=="Jueves"){
		 echo "<script language='javascript'>
                     alert('LA OBRA SOCIAL 'PAMI' NO PUEDE ASIGNAR TURNOS PARA LOS DIAS MARTES, MIERCOLES Y JUEVES .');
                     window.close();
					 window.opener.location.reload();
              </script>";    
	     exit;
		 }
  else
   {
   if (!empty($code))
 { 
		$sql1= mysqli_query($conexion,"INSERT INTO turnos (codesp, codmed, fecha, hora, fechaalta, dni, nombre, domicilio, telefono, os, nroafiliado, usuario) VALUES ('$code','$codm','$fec' ,'$hr', '$fa', '$dni', '$nombre', '$dom', '$tel', '$os', '$nro', '$usu')");
	     if (!$sql1) 
		 {
            die('Consulta no válida: ' . mysql_error());
          }

		 echo "<script language='javascript'>
                     alert('EL TURNO FUE CARGADO CON EXITO.');
                     window.close();
					 window.opener.location.reload();
              </script>";    
	     exit;
 }
   
   }
}
else{
if (!empty($code))
 { 
		$sql1= mysqli_query($conexion,"INSERT INTO turnos (codesp, codmed, fecha, hora, fechaalta, dni, nombre, domicilio, telefono, os, nroafiliado, usuario, estado) VALUES ('$code','$codm','$fec' ,'$hr', '$fa', '$dni', '$nombre', '$dom', '$tel', '$os', '$nro', '$usu', 1)");
	     if (!$sql1) 
		 {
            die('Consulta no válida: ' . mysql_error());
          }

		 echo "<script language='javascript'>
                     alert('EL TURNO FUE CARGADO CON EXITO.');
					 window.close(); 	
					 window.opener.location.reload();
              </script>";    
	     exit;
 }
 }
 
?>