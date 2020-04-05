<?php
# definimos los valores iniciales para nuestro calendario
include("conexion.php");
session_start();
     if (!isset($_POST['boton1'])) 
	 {
	    if(!isset($_POST['boton2']))
	     {
           $month=date("n");
		   $_SESSION['mes']=$month;
		   $year=date("Y");
		   $_SESSION['anio']=$year;
		  }
		  else
		   {
		     if($_SESSION['mes']==12)
			   {
				   $month=1;
				   $_SESSION['mes']=$month;
				   $year1=$_SESSION['anio'];
				   $year=$year1+1;
				   $_SESSION['anio']=$year;
				}
			   else
				  {
				   $month1=$_SESSION['mes'];
				   $month=$month1+1;
				   $_SESSION['mes']=$month;
				   $year=$_SESSION['anio'];
				   }
					
		   }
     } 
	 else
	  { 
	   if($_SESSION['mes']==1)
	   {
	       $month=12;
		   $_SESSION['mes']=$month;
		   $year1=$_SESSION['anio'];
		   $year=$year1-1;
		   $_SESSION['anio']=$year;
	    }
	   else
	      {
	       $month1=$_SESSION['mes'];
           $month=$month1-1;
		   $_SESSION['mes']=$month;
		   $year=$_SESSION['anio'];
		   }
      }



$diaActual=date("j");

# Obtenemos el dia de la semana del primer dia
# Devuelve 0 para domingo, 6 para sabado
$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
# Obtenemos el ultimo dia del mes
$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
 
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="video.css">
<script src="ajax.js"></script>
<script src="funciones.js" language="JavaScript"></script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<script> 
  function abrir(url) { 
                        open(url,'','top=100,left=150,width=300,height=550') ; 
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
	<style>
		#calendar {
			font-family:Arial;
			font-size:12px;
			border:solid;
		}
		#calendar caption {
			text-align:left;
			padding:5px 10px;
			background-color:#009966;
			color:#fff;
			font-weight:bold;
		}
		#calendar th {
			background-color:#009933;
			color:#fff;
			width:40px;
		}
		#calendar td {
			text-align:right;
			padding:2px 5px;

			padding: 5px;
border-right-width: 1px;
border-bottom-width: 1px;
border-right-style: solid;
border-bottom-style: solid;
border-right-color: #EBE9BC;
border-bottom-color: #EBE9BC;
font-weight:bold;
		}
		#calendar td:hover {
          background-color: #f00;
                        }
		#calendar .hoy {
			background-color:red;
		}
	</style>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
	<div id="logo">
	<?php
//session_start();
include("conexion.php");
//if( !$_REQUEST['boton'] == "INGRESAR" )
if (isset ($_SERVER['primeraPagina']) )
{
echo "<script language='javascript'>
                     alert('NO TIENE LOS PERMISOS PARA ENTRAR A ESTA AREA.');
					 window.location.href = 'index.php';	
              </script>";
}
else
{ 
         
         echo "BIENVENIDO    '".$_SESSION['nombre']."'  ";

		 if(isset ($_POST['sele1']))
		 {
		   	   $esp=$_POST['sele1'];
			   $_SESSION['esp']=$esp;
			   $med1=$_POST['sele2'];
			  $_SESSION['med1']=$med1;
		}
		 else{
            $esp=$_SESSION['esp'];
		    $med1=$_SESSION['med1'];
		      }
		 
		 $q = date('Y-m-d');

?>
 	</div>
		<div id="menu">
			<ul>
				<li ><a href="ingreso.php" accesskey="5" title="">TURNOS RECIENTES</a></li>
				<li class="active"><a href="turnosxmes.php" accesskey="5" title="">TURNOS POR MES</a></li>
				<li><a href="consultas.php" accesskey="5" title="">CONSULTAS</a></li>
				<li><a href="otros.php" accesskey="5" title="">OTROS</a></li>
				<li><a href="salir.php" accesskey="5" title="">CERRAR SESION</a></li>
			</ul>
		</div>
	<!--</div>-->
	<!--<div id="banner" class="container">-->
		<!--<div class="title">-->
			

<?php
   $sql1="SELECT * from especialidades where codigo=".$esp;
	    $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
	 
	$combobit="";
	if ($result1->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
		
		while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
		{
			$combobit .=$row1['especialidad']; //concatenamos el los options para luego ser insertado en el HTML
		}
	}
	
	$sql2="SELECT * from profesionales where codigo=".$med1;
	 $result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
	 
	$med="";
	if ($result2->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
	{
		
		while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) 
		{
			$med.=$row2['profesional']; //concatenamos el los options para luego ser insertado en el HTML
		}
	}
	echo("<br><br><h1><font color='red' size=4>------->ESPECIALIDAD:".$combobit."------->MEDICO: ".$med."</font></h1><br><br>");
 ?>
<table  border='0'  >
    <tr >
    <td VALIGN=TOP >

<table id="calendar">
    <FORM METHOD="POST" ACTION="turnosxmes1.php">
	<caption><center><input type="submit" value="<<" name="boton1"><?php echo $meses[$month]." ".$year?><input type="submit" value=">>" name="boton2"></center></caption>
	</FORM>
	<tr>
		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
		<th>Vie</th><th>Sab</th><th>Dom</th>
	</tr>
	<tr bgcolor="silver">
		<?php
		$last_cell=$diaSemana+$ultimoDiaMes;
		// hacemos un bucle hasta 42, que es el m�ximo de valores que puede
		// haber... 6 columnas de 7 dias
		$i3=0;
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				// determinamos en que dia empieza
				$day=1;
			}
			if($i<$diaSemana || $i>=$last_cell)
			{
				// celca vacia
				echo "<td bgcolor='black'>&nbsp;</td>";
			}else{
				// mostramos el dia
				//if($day==$diaActual)
				//echo "<td class='hoy'><center><a id='enlace$day' href='pagina.php?d=$day&y=$year&m=$month' style='width:100%;height:100%;display:block;'>$day</a></center></td>";
				//else
				  $fec1=$year.'/'.$month.'/'.$day;
                  $time1 = strtotime($fec1);
                  $q = date('Y-m-d',$time1);
		 		  $q1=1;
                  $q2=1;
				  $sql1="SELECT * FROM turnos where fecha='".$q."'and codesp='".$esp."' and codmed='".$med1."' order by hora";
	              $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable

		          $combobit1 = mysqli_num_rows($result1);
				  $dias5 = array("Domingo", "Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
				  $fecha2 = $dias5[date("w", strtotime($q))];  
				  if($fecha2=="Sabado" or $fecha2=="Domingo")
				  {
				  echo "<td ><center>$day</center></td>";
				  }
				  else{
				  $i3=$i3+1;
				  if( $combobit1==12)
				  {
				  
				echo "<td bgcolor='LightSalmon' title='CANTIDAD DE TURNOS: $combobit1'><center><a id='enlace$i3' href='pagina.php?d=$day&y=$year&m=$month' >$day</a></center></td>";
				  }
				  else
				  {
				    if( $combobit1==0)
				    {
			echo "<td bgcolor='CornflowerBlue' title='CANTIDAD DE TURNOS: $combobit1'><center><a id='enlace$i3' href='pagina.php?d=$day&y=$year&m=$month' >$day</a></center></td>";
					}
					else
					{
			echo "<td bgcolor='Gold' title='CANTIDAD DE TURNOS: $combobit1'><center><a id='enlace$i3' href='pagina.php?d=$day&y=$year&m=$month' >$day</a></center></td>";
			         }
				  }
				  }
				$day++;
			}
			// cuando llega al final de la semana, iniciamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>

	</tr>
</table>

	</td >
 <td >
<div  id="scrolltable" style=" background: #eeeeee; overflow:auto;
border-right:  #6699CC 1px solid; border-top: #999999 1px solid;
border-left: #6699CC 1px solid; border-bottom:  #6699CC 1px solid;
scrollbar-arrow-color : #999999; scrollbar-face-color : #666666;
scrollbar-track-color :#3333333 ; 
height:480px;   width: 95%">
<?php
//session_start();
include("conexion.php");
$q = date('Y-m-d');
$q1=1;
$q2=1;

	 $fe=date("d/m/y");
     
	 echo "<table id='simple' border='5' class='tablebonita' sTYLE='table-layout:fixed'>"; //EMPIEZA A CREAR LA TABLA 
	 echo "<center>","<thead>","<tr>";//<tr> CREA UNA NUEVA FILA 
	 echo "<th scope='col'>ESTADO</th>";
	 echo "<th scope='col'>FECHA </th>";
	 echo "<th scope='col'>HORA </th>";
	 //echo "<th scope='col'>DNI </th>";//encabezado
	 echo "<th scope='col'>NOMBRE</th>";
	 echo "<th scope='col'>TELEFONO</th>";
	// echo "<th scope='col'>DOMICILIO</th>";
	 echo "<th scope='col'>OBRA SOCIAL</th>";
	 echo "<th scope='col'>AFILIADO</th>";
	 //echo "<th scope='col'>ELIMINAR</th>";
	 
	 echo "</tr>","</thead>","</center>";
	 
		$hi=19;
		$mi="00";
		$mi1=00; 
for ($h = 0; $h < 3; $h++) {
  for ($m = 0; $m < 4; $m++) {
	       $hf=$hi.":".$mi.":"."00";
		   $result = mysqli_query($conexion, "SELECT * FROM turnos where fecha='".$q."'and hora='".$hf."' and codesp='".$esp."' and codmed='".$med1."' order by hora"); 
	 $i=-1;
	 if (mysqli_num_rows($result)>0)
	 {	 
	     while($row =  mysqli_fetch_array($result))
	     { 
		    $sql2c="SELECT * from os where codigo=".$row[11];
	        $result2c = $conexion->query($sql2c); //usamos la conexion para dar un resultado a la variable
	        $obs="";
			if ($result2c->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{
				
				while ($row2c = $result2c->fetch_array(MYSQLI_ASSOC)) 
				{
					$obs.=$row2c['os']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
		  echo "<font color='red'>";
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
		    echo "<font color='black'><tr>";
						?>
<td  title="AGREGAR UN TURNO"><center><a href="javascript:abrir('<?php echo "registroturnos.php?fc=$q&hr=$hf&cesp=$esp&cmed=$med1"; ?>')"><img src="images/+.png"></a></center>
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
 </div>
 	</td >
   </tr>
    </table >

			
		<!--</div>-->
	<!--</div>-->
	
</div>



</body>
</html>
<?php
}
?>
