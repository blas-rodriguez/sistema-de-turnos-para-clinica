<?php
include("conexion.php");	
$cod = $_REQUEST['cod'];
//echo"cod".$cod;
$es  = trim($_REQUEST['es']);
//echo"especialidad".$es;
$me  =trim($_REQUEST['me']);
//echo"emdico".$me;
$fe  = $_REQUEST['fe'];
//echo"fecha".$fe;
$hr  = $_REQUEST['hr'];
///echo"hora".$hr;
$us  = trim($_REQUEST['us']);
//echo"usuario".$us;
$dni  = $_REQUEST['dni'];
//echo"dni".$dni;
$nom  = trim($_REQUEST['nom']);
//echo"nombre".$nom;
$dom  = trim($_REQUEST['dom']);
//echo"domicilio".$dom;
$tel  = trim($_REQUEST['tel']);
//echo"telefono".$tel;
$os  = trim($_REQUEST['os']);
//echo"obra social:".$os;
$afil  = trim($_REQUEST['afil']);
//echo"afiliado:".$afil;
$fa = date('Y-m-d ');
//echo"fecah:".$fa;
  
$sql1a= mysqli_query($conexion,"INSERT INTO turnos ( codesp, codmed, fecha, hora, fechaalta, usuario, dni, nombre, domicilio, telefono, os, nroafiliado) VALUES ( '$es', '$me', '$fe', '$hr', '$fa', '$us', '$dni', '$nom', '$dom', '$tel', '$os', '$afil')");

	     if (!$sql1a)
		 {
            die('Consulta no válida: ' . error_reporting(E_ALL));
          }
		  else{
		  $sql2a= mysqli_query($conexion,"DELETE from eliminados WHERE cod=$cod");
		  echo "<script language='javascript'>
                     alert('EL TURNO FUE REACTIVADO.');
					 window.location.href = 'eliminados.php';	
              </script>";    
	      exit;
		 }

?>