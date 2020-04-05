<?php
include("conexion.php");

$q=$_POST['q'];
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$dom=$_POST['dom'];
$tel=$_POST['tel'];
$os=$_POST['os'];
$nro=$_POST['nro'];
$sql1="SELECT * from especialidades where codigo=".$q1;
	    $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
	 
	$combobit="";
	if ($result1->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
		
		while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
		{
			$combobit .=$row1['especialidad']; //concatenamos el los options para luego ser insertado en el HTML
		}
	}
	
	$sql2="SELECT * from profesionales where codigo=".$q2;
	 $result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
	 
	$med="";
	if ($result2->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
		
		while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) 
		{
			$med.=$row2['profesional']; //concatenamos el los options para luego ser insertado en el HTML
		}
	}

//ak tiene q ir la parte sql
	 echo("<font color='blue' size=4>TURNOS CARGADOS PARA:  ".$q."<br /><br /> ESPECIALIDAD:".$combobit."<br /><br /> MEDICO: ".$med."</font><br><br>");
	 $fe=date("d/m/y");
     echo "<font color='black'>";
	 echo "<table id='simple' border='5' class='tablebonita'>"; //EMPIEZA A CREAR LA TABLA 
	 echo "<center>","<thead>","<tr>";//<tr> CREA UNA NUEVA FILA 
	 echo "<th scope='col'>HORA </th>";
	 echo "<th scope='col'>ESPECIALIDAD </th>";//encabezado
	 echo "<th scope='col'>MEDICO</th>";
	 echo "<th scope='col'>ESTADO</th>";	 
	 echo "</tr>","</thead>","</center>";
			//$i=$i+1;
		$hi=19;
		$mi="00";
		$mi1=00; 
		$z=0;
		$nuevafecha = new DateTime($q);
		$q3=$nuevafecha->format('Y-m-d');
while ($z <= 14) {
for ($h = 0; $h < 3; $h++) {
  for ($m = 0; $m < 4; $m++) {
	 $hf=$hi.":".$mi.":"."00";

	 $result = mysqli_query($conexion, "SELECT * FROM turnos where fecha='".$q3."'and hora='".$hf."' and codesp='".$q1."' and codmed='".$q2."' order by hora"); 
	 $i=-1;
	 if (mysqli_num_rows($result)>0)
	 {	
	     while($row =  mysqli_fetch_array($result)) 
	     {
		    
		   	//echo "<tr style='background-color: RED;'>";
			//echo "<td >$hf</td>";
			//echo "<td >".$q3."</td>";
			//echo "<td >"."</td>";
	        //echo "<td >OCUPADO</td>";			
		    //echo "</tr>";
		 }
	 }
	 else{
            if ($z < 12){
		    echo "<tr>";
			echo "<td >$hf</td>";
			echo "<td >".$q3."</td>";
			echo "<td >"."</td>";
	        echo "<td ><center><form  action='realizado.php?code=$q1&codm=$q2&fec=$q3&hr=$hf&nom=$nombre&dom=$dom&tel=$tel&os=$os&nro=$nro&dni=$dni' method='post'><input    type='submit' value='ASIGNAR' name='boton'></form> </center></td>";			
		    echo "</tr>";
			 $z=$z+1;
			}
		}

		  	  //$z=$z+1;
		  if($mi>=45){$mi="00";}
		  else{$mi=$mi+15;}

  }
  if($hi>=21){$hi="19";}
  else{$hi=$hi+1;}
   
}  
     $nuevafecha->modify('+1 day');
	 $q3=$nuevafecha->format('Y-m-d');
	 
}  
echo "</font>";  
?>