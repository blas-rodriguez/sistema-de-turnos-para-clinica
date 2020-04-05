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
  
$sql1= mysqli_query($conexion,"INSERT INTO confirmados (cod, codesp, codmed, fecha, hora, fechaconfirma, usuario, dni, nombre, domicilio, telefono, os, nroafiliado) VALUES ('$cod', '$es', '$me', '$fe', '$hr', '$fa', '$us', '$dni', '$nom', '$dom', '$tel', '$os', '$afil')");
	     if (!$sql1)
		 {
            die('Consulta no válida: ' . mysql_error());
          }
		  else{
		  $sql2= mysqli_query($conexion,"Update turnos set estado='1' WHERE (codigo='$cod')");
		  echo "<script language='javascript'>
                     alert('EL TURNO FUE CONFIRMADO.');
					 window.location.href = 'ingreso.php';	
              </script>";    
	      exit;
		 }

?>