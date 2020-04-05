<?php
include("conexion.php");	
$cod = $_REQUEST['cod'];
$cod1 = $_REQUEST['cod1'];

  
$sql1a= mysqli_query($conexion,"Update turnos set estado='0' WHERE (codigo='$cod1')");

	     if (!$sql1a)
		 {
            die('Consulta no válida: ' . error_reporting(E_ALL));
          }
		  else{
		  $sql2a= mysqli_query($conexion,"DELETE from confirmados WHERE codigo=$cod");
		  echo "<script language='javascript'>
                     alert('EL TURNO FUE REACTIVADO.');
					 window.location.href = 'confirmados.php';	
              </script>";    
	      exit;
		 }

?>