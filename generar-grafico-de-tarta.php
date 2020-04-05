<?php 
	require_once ("jpgraph/src/jpgraph.php");
	require_once ("jpgraph/src/jpgraph_pie.php");
	include("conexion.php");
	//PADRON TOTAL
	 //$consulta=mysqli_query($conexion,"SELECT * FROM legajo ");
       // while($dato= mysqli_fetch_array($consulta)){
		$sql1="SELECT * from legajo ";
	    $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
		$combobit1 = mysqli_num_rows($result1); 
        $num1 = (int)$combobit1;
	//CANTIDAD DE ACTIVOS
	    $sql2="SELECT * from legajo where estado='1'";
	    $result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
	    $combobit2 = mysqli_num_rows($result2); 
		$num2 = (int)$combobit2; 
		//CANTIDAD DE BAJAS
	    $sql3="SELECT * from legajo where estado<>'1'";
	    $result3 = $conexion->query($sql3); //usamos la conexion para dar un resultado a la variable
		$combobit3 = mysqli_num_rows($result3); 
		$num3 = (int)$combobit3;
		$resto=$num1-($num3+$num2);
	 
	// Se define el array de valores y el array de la leyenda
	//$datos = array($combobit1,60,21);
	//$datos = array($num1,$num2,$num3);
	//$datos = array(100,$num3,$num2);
	//$leyenda = array("PADRON","ACTIVOS","BAJAS",);
	$datos = array($num3,$num2);
	$leyenda = array("ACTIVOS","BAJAS",);
	 
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
	$nombre = "hola.jpg";
	//$im = $graph->Stroke("$nombre");
	$grafico->Stroke("$nombre");
	//$grafico->Stroke("$nombre");
?>
