<script> 
  function abrir(url) { 
                        open(url,'','top=250,left=350,width=300,height=300') ; 
						window.opener.location.reload();
                       }
function confirmDel()
{
  var agree=confirm("¿Realmente desea eliminarlo? ");
  if (agree) 
  return true ;
  else
  return false;
}
</script>
<?php
session_start();
include("conexion.php");
$dia=$_REQUEST['d'];
$anio=$_REQUEST['y'];
$mes=$_REQUEST['m'];
$fec1=$anio.'/'.$mes.'/'.$dia;
$time1 = strtotime($fec1);

$q = date('Y-m-d',$time1);
//echo"EL DIA SELECCIONADO ES: ".$dia. " / ".$mes." / ".$anio."</br>";
//echo"EL DIA SELECCIONADO ES: ".$q."</br>";
//echo $newformat;
//$q=date('Y-m-d');
$q1=$_SESSION['esp'];
$q2=$_SESSION['med1'];

	 $fe=date("d/m/y");
     
	 echo "<table id='simple' border='5' class='tablebonita'>"; //EMPIEZA A CREAR LA TABLA 
	 echo "<center>","<thead>","<tr>";//<tr> CREA UNA NUEVA FILA 
	 echo "<th scope='col'>ESTADO</th>";
	 echo "<th scope='col'>FECHA </th>";
	 echo "<th scope='col'>HORA </th>";
	 //echo "<th scope='col'>DNI </th>";//encabezado
	 echo "<th scope='col'>NOMBRE</th>";
	 echo "<th scope='col'>TELEFONO</th>";
	 //echo "<th scope='col'>DOMICILIO</th>";
	 echo "<th scope='col'>OBRA SOCIAL</th>";
	 echo "<th scope='col'>AFILIADO</th>";
	// echo "<th scope='col'>ELIMINAR</th>";
	 
	 echo "</tr>","</thead>","</center>";
	 
		$hi=19;
		$mi="00";
		$mi1=00; 
for ($h = 0; $h < 3; $h++) {
  for ($m = 0; $m < 4; $m++) {
	       $hf=$hi.":".$mi.":"."00";
		   $result = mysqli_query($conexion, "SELECT * FROM turnos where fecha='".$q."'and hora='".$hf."' and codesp='".$q1."' and codmed='".$q2."' order by hora"); 
	 $i=-1;
	 if (mysqli_num_rows($result)>0)
	 {	 
	     while($row =  mysqli_fetch_array($result)) 
	     {   $sql2c="SELECT * from os where codigo=".$row[11];
	        $result2c = $conexion->query($sql2c); //usamos la conexion para dar un resultado a la variable
	        $obs="";
			if ($result2c->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{
				
				while ($row2c = $result2c->fetch_array(MYSQLI_ASSOC)) 
				{
					$obs.=$row2c['os']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
		    
			echo "<font color='black'>";
		   	echo "<tr style='background-color: RED;'>";
			echo "<td title='ELIMINAR'><center><a onclick='return confirmDel();'  href='eliminar.php?cod=1&reg=$row[0]' ><IMG src='images/eliminar-cancelar-icono-4935-16.png' /></a></center></td>";
			echo "<td ><font color='black'>$q</font></td>";
			echo "<td ><font color='black'>$hf</font></td>";
			//echo "<td >$row[7]</td>";
			echo "<td >$row[8]</td>";
			//echo "<td >$row[9]</td>";
			echo "<td >$row[10]</td>";
			echo "<td >$obs</td>";
			echo "<td >$row[12]</td>";
			//echo "<td ><center><input type=image src='images/eliminar-cancelar-icono-4935-16.png' /></center></td>";
				
		    echo "</tr>";
			echo "</font>";
		 }
	 }
	 else{  echo "<font color='black'>";
		    echo "<tr>";
						?>
<td  title="AGREGAR UN TURNO"><center><a href="javascript:abrir('<?php echo "registroturnos.php?fc=$q&hr=$hf&cesp=$q1&cmed=$q2"; ?>')"><img src="images/+.png"></a></center>
			<?php
			echo "<td ><font color='black'>$q</font></td>";
			echo "<td ><font color='black'>$hf</font></td>";
			//echo "<td ></td>";
			//echo "<td ></td>";
			//echo "<td ></td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td ></td>";
			echo "<td ></td>";
	    	//echo "<td ><center><input type='submit' value='ASIGNAR' name='boton'></center></td>";			
		    //echo "<td ><center><a href='confirmar.php' ><IMG src='images/comprobar-si-puede-icono-8214-16.png' /></a></center></td>";

			echo "</tr>";
			echo "</font>";
		}
		
		  if($mi>=45){$mi="00";}
		  else{$mi=$mi+15;}
  }
  $hi=$hi+1;
} 

?>