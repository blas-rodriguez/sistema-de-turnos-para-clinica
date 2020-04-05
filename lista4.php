<?php 
 session_start();
 $sp=$_POST['sele1'];
 //$ficha1=$_SESSION['socio'];
 $desde =  $_POST['desde'];
 $_SESSION['desde']=$desde;
 $date = new DateTime($desde);
 $desde1 = $date->format('Y-m-d');
 
 $hasta = $_POST['hasta'];
 $_SESSION['hasta']=$hasta;
 $date1 = new DateTime($hasta);
 $hasta1 = $date1->format('Y-m-d');
 
 if (file_exists("hola1.jpg")) {
    unlink("hola1.jpg");}

// unlink("hola1.jpg");
 
require_once("dompdf/dompdf_config.inc.php"); 
require_once("generar-grafico-de-tarta4.php"); 
include("conexion.php");
	
	    $sql3="SELECT * from os where codigo=".$sp;
	        $result3 = $conexion->query($sql3); //usamos la conexion para dar un resultado a la variable
      	    $combobit3="";
			if ($result3->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{				
				while ($row3 = $result3->fetch_array(MYSQLI_ASSOC)) 
				{
					$combobit3 .=$row3['os']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<h1 align="center">LISTADO DE TURNOS<BR> OBRA SOCIAL:'.$combobit3.'<BR> DESDE: '. $desde.' HASTA: '.$hasta.' </h1><br>
<center>
<img src="hola1.jpg" ></img>
</center>
<br>
<div align="center">
    <table width="100%" border="1">
      <tr>
	  <td bgcolor="#0099FF"><strong>FECHA</strong></td>
	  <td bgcolor="#0099FF"><strong>HORA</strong></td>
        <td bgcolor="#0099FF"><strong>ESPECIALIDAD</strong></td>
		<td bgcolor="#0099FF"><strong>MEDICO</strong></td> 
        <td bgcolor="#0099FF"><strong>PACIENTE</strong></td>  
		<td bgcolor="#0099FF"><strong>TEL</strong></td>  
		<td bgcolor="#0099FF"><strong>ESTADO</strong></td>  
        
      </tr>';
//$resultado=mysql_query("SELECT A.id, B.id, A.titulo, A.texto FROM $tabla A, $tabla2 B WHERE A.id=B.id IN (SELECT id, nombre, apellidos FROM AUTORES WHERE nombre=$nombre AND apellidos=$apellidos)");
        $consulta=mysqli_query($conexion,"SELECT * from turnos  WHERE fecha BETWEEN '".$desde1."' AND '".$hasta1."' and os='".$sp."'");
        
		$sql1="SELECT * from turnos  WHERE fecha BETWEEN '".$desde1."' AND '".$hasta1."' and os='".$sp."'";
	    $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
		$combobit1 = mysqli_num_rows($result1); 

	 

		while($dato= mysqli_fetch_array($consulta)){
		//$sql1="SELECT * from legajo  WHERE fechaalta BETWEEN '".$desde1."' AND '".$hasta1."' ";
		    $sql2="SELECT * from profesionales where codigo=".$dato['codmed'];
	        $result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
      	    $combobit2="";
			if ($result2->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{				
				while ($row1 = $result2->fetch_array(MYSQLI_ASSOC)) 
				{
					$combobit2 .=$row1['profesional']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
			$sql2a="SELECT * from especialidades where codigo=".$dato['codesp'];
	        $result2a = $conexion->query($sql2a); //usamos la conexion para dar un resultado a la variable
      	    $combobit2a="";
			if ($result2a->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{				
				while ($row1a = $result2a->fetch_array(MYSQLI_ASSOC)) 
				{
					$combobit2a .=$row1a['especialidad']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
			$std="";
          if($dato['estado']==2)
		    { 
			  $std="ATENDIDO";
			}
		  else
		    {
			  $std="EN ESPERA";
			 }
$codigoHTML.='
      
	  <tr>
	    <td><center>'.$dato['fecha'].'</center></td>
		<td><center>'.$dato['hora'].'</center></td>
		<td><center>'.$combobit2a.'</center></td>
		<td><center>'.$combobit2.'</center></td>
        <td><center>'.$dato['nombre'].'</center></td>	
		<td><center>'.$dato['telefono'].'</center></td>
		<td><center>'.$std.'</center></td>
      </tr>';
      } 
$codigoHTML.='
    </table></br></br>
	CANTIDAD DE REGISTROS POR LA CONSULTA: '.$combobit1.'
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->set_paper("A4","portrait");
$dompdf->load_html($codigoHTML);
//ini_set("memory_limit","128M");
$dompdf->render();
//$dompdf->stream("TAREAS.pdf");
 header('Content-type: application/pdf');
 echo $dompdf->output();
?>