<?php 
//session_start();
    //$cod1=$_SESSION['desde'];
	//$cod2=$_SESSION['hasta'];
	
	//$desde =  $_POST['desde'];
//    $date = new DateTime($cod1);
 //   $desde1 = $date->format('Y-m-d');
 
    //$hasta = $_POST['hasta'];
  //  $date1 = new DateTime($cod2);
   // $hasta1 = $date1->format('Y-m-d');
 
	require_once ("jpgraph/src/jpgraph.php");
	require_once ("jpgraph/src/jpgraph_pie.php");
	include("conexion.php");
	//PADRON TOTAL
	 //$consulta=mysqli_query($conexion,"SELECT * FROM legajo ");
       // while($dato= mysqli_fetch_array($consulta)){
		$sql11="SELECT * from turnos  WHERE fecha BETWEEN '".$desde1."' AND '".$hasta1."' and codmed='".$sp."'";
		$result11 = $conexion->query($sql11);
		$combobit11 = mysqli_num_rows($result11);
		$num1 = (int)$combobit11; 
		//$num1 = 50; 
	//CANTIDAD DE ACTIVOS
	    $sql22="SELECT * from turnos  WHERE  fecha BETWEEN '".$desde1."' AND '".$hasta1."' and codmed='".$sp."' and estado=2";
		$result22 = $conexion->query($sql22);
		$combobit22 = mysqli_num_rows($result22); 
		$num2 = (int)$combobit22;
		//$num2 = 50;
		//CANTIDAD DE BAJAS
	    $sql33="SELECT * from turnos  WHERE  fecha BETWEEN '".$desde1."' AND '".$hasta1."' and codmed='".$sp."' and not estado=2";
		$result33 = $conexion->query($sql33);
		$combobit33 = mysqli_num_rows($result33); 
		$num3 = (int)$combobit33;
	 
	// Se define el array de valores y el array de la leyenda
	//$datos = array($combobit1,60,21);
	//$datos = array($num1,$num2,$num3);
	//$datos = array(100,$num3,$num2);
	//$leyenda = array("PADRON","ACTIVOS","BAJAS",);
	$datos = array($num2,$num3);
	$leyenda = array("ATENDIDOS","NO ATENDIDOS");
	 
	//Se define el graficosd
	$grafico = new PieGraph(450,300);
	
	//Definimos el titulo 
	$grafico->title->Set("PROFESIONALES");
	$grafico->title->SetFont(FF_FONT1,FS_BOLD);
	 
	//Añadimos el titulo y la leyenda
	$p1 = new PiePlot($datos);
	$p1->SetLegends($leyenda);
	$p1->SetCenter(0.4);
	 
	//Se muestra el grafico
	$grafico->Add($p1);
	$nombre = "hola1.jpg";
	//$im = $graph->Stroke("$nombre");
	$grafico->Stroke("$nombre");
	//$grafico->Stroke("$nombre");
?>
