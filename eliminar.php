<?php
include("conexion.php");	
$cod = $_REQUEST['cod'];
$reg  = $_REQUEST['reg'];

if($cod==0){
		  $sql2= mysqli_query($conexion,"DELETE from usuarios WHERE codigo=$reg");
		   if (!$sql2) 
		 {
            die('Consulta no válida: ' . error_reporting(E_ALL));
          }
		  else{
		 echo "<script language='javascript'>
                     alert('EL USUARIO FUE ELIMINADO CON EXITO.');
					 window.location.href = 'usu.php';	
              </script>";    
	     exit;
		 }
}
if($cod==1){
		  $sql2= mysqli_query($conexion,"DELETE from os WHERE codigo=$reg");
		   if (!$sql2) 
		 {
            die('Consulta no válida: ' . error_reporting(E_ALL));
          }
		  else{
		 echo "<script language='javascript'>
                     alert('LA OBRA SOCIAL FUE ELIMINADA CON EXITO.');
					 window.location.href = 'os.php';	
              </script>";    
	     exit;
		 }
}
if($cod==2){
		  $sql2= mysqli_query($conexion,"DELETE from profesionales WHERE codigo=$reg");
		   if (!$sql2) 
		 {
            die('Consulta no válida: ' . error_reporting(E_ALL));
          }
		  else{
		 echo "<script language='javascript'>
                     alert('EL PROFESIONAL FUE ELIMINADA CON EXITO.');
					 window.location.href = 'profes.php';	
              </script>";    
	     exit;
		 }
}
if($cod==3){
		  $sql2= mysqli_query($conexion,"DELETE from especialidades WHERE codigo=$reg");
		   if (!$sql2) 
		 {
            die('Consulta no válida: ' . error_reporting(E_ALL));
          }
		  else{
		 echo "<script language='javascript'>
                     alert('LA ESPECIALIDAD FUE ELIMINADA CON EXITO.');
					 window.location.href = 'otros.php';	
              </script>";    
	     exit;
		 }
}
	    


?>