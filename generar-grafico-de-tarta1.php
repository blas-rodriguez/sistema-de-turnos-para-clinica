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
		$sql1="SELECT * from turnos  WHERE fecha BETWEEN '".$desde1."' AND '".$hasta1."' ";
	    //$result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
		//$result1 = mysqli_query($sql1);
		//$combobit1 = mysqli_num_rows($result1);
		//$combobit1 = mysqli_num_rows($result1);
		//$num1 = (int)$combobit1; 
		$num1 = 50; 
	//CANTIDAD DE ACTIVOS
	    $sql2="SELECT * from turnos  WHERE not fecha BETWEEN '".$desde1."' AND '".$hasta1."' ";
	    //$result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
		//$result2 = mysql_query($sql2);
		//$combobit2 = mysqli_num_rows($result2); 
		//$combobit2 = mysql_num_rows($result2); 
		//$num2 = (int)$combobit2;
		$num2 = 50;
		//CANTIDAD DE BAJAS
	    
	 
	// Se define el array de valores y el array de la leyenda
	//$datos = array($combobit1,60,21);
	//$datos = array($num1,$num2,$num3);
	//$datos = array(100,$num3,$num2);
	//$leyenda = array("PADRON","ACTIVOS","BAJAS",);
	$datos = array($num1,$num2);
	$leyenda = array("CONSULTA","RESTO",);
	 
	//Se define el graficosd
	$grafico = new PieGraph(450,300);
	
	//Definimos el titulo 
	$grafico->title->Set("CLINICA MEDICA");
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
