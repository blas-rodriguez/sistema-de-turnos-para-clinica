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
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<script> 
  function abrir(url) { 
                        open(url,'','top=250,left=350,width=300,height=300') ; 
                       }
</script>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
	<div id="logo">
	<?php
session_start();
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
		 ?>
	       <a href="javascript:abrir('registro.php')">--->MODIFICAR</a>   
	     <?php 
		 echo "<a href='salir.php'>--->CERRAR SESION</a>";

?>
 	</div>
		<div id="menu">
			<ul>

				<li class="active"><a href="ingreso.php" accesskey="5" title="">TURNOS RECIENTES</a></li>
				<li><a href="turnosxsemana.php" accesskey="5" title="">TURNOS POR SEMANA</a></li>
				<li><a href="turnosxmes.php" accesskey="5" title="">TURNOS POR MES</a></li>
				<li><a href="consultas.php" accesskey="5" title="">CONSULTAS</a></li>
			</ul>
		</div>
	</div>

	<!--<div id="banner" class="container">-->
	<table  border='0'  >
    <tr >
    <td VALIGN=TOP >
		<!--<div class="title">-->
            <h2>TURNOS POR SEMANA</h2>
			<div id="menu1">
			 <ul>
			  <li><a href="ingreso.php" title="TUNOS CARGADOS RECIENTEMENTES">Recientes</a></li>
			  <li><a href="turnos1.php" title="ASIGNACION DE TURNOS">Turnos</a></li>
			  <li><a href="eliminados.php" title="TURNOS ELIMINADOS">Eliminados</a></li>
			  <li><a href="confirmados.php" title="TURNOS CONFIRMADOS">Confirmados</a></li>
			  <li><a href="semana.php" title="TURNOS POR SEMANA">Por Semana</a></li>
			  <li><a href="mes.php" title="TURNOS POR MES">Por Mes</a></li>
			 </ul>
			</div>
		<!---</div>-->
	</td >
 <td >
<div id=scrolltable style=" background: #eeeeee; overflow:auto;
border-right:  #6699CC 1px solid; border-top: #999999 1px solid;
border-left: #6699CC 1px solid; border-bottom:  #6699CC 1px solid;
scrollbar-arrow-color : #999999; scrollbar-face-color : #666666;
scrollbar-track-color :#3333333 ; 
height:300px;   width: 101%">
	<?php
	  echo "<table id='simple' border='5' class='tablebonita' >"; //EMPIEZA A CREAR LA TABLA 
	 echo "<center>","<thead>","<tr>";//<tr> CREA UNA NUEVA FILA 
	 echo "<th scope='col'>ALTA </th>";
	 echo "<th scope='col'>FECHA </th>";//encabezado
	 echo "<th scope='col'>HORA</th>";
	 echo "<th scope='col'>PACIENTE</th>";
	 echo "<th scope='col'>TELEFONO</th>"; 
	 echo "<th scope='col'>OBRA S.</th>";
	 echo "<th scope='col'>AFILIADO</th>";  
	 echo "<th scope='col'>ESPECIALIDAD</th>";
	 echo "<th scope='col'>ELIMINAR</th>"; 
	 echo "<th scope='col'>CONFIRMAR</th>"; 
	 echo "</tr>","</thead>","</center>";
	 

     $result = mysqli_query($conexion, "SELECT * FROM turnos  order by fechaalta desc, hora"); 
	 if (mysqli_num_rows($result)>0)
	 {	 
	     while($row =  mysqli_fetch_array($result)) 
	     {
		    $sql1="SELECT * from especialidades where codigo=".$row[1];
	        $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
      	    $combobit="";
			if ($result1->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{				
				while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
				{
					$combobit .=$row1['especialidad']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
			$sql2="SELECT * from profesionales where codigo=".$row[2];
	        $result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
	        $med="";
			if ($result2->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{
				
				while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) 
				{
					$med.=$row2['profesional']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
		   	echo "<tr style='background-color: RED;'>";
			echo "<td title='hola'>$row[5]</td>";
			echo "<td >$row[3]</td>";
			echo "<td >$row[4]</td>";
			echo "<td title='$row[9]'>$row[8]</td>";
			echo "<td  >$row[10]</td>";	
			echo "<td >$row[11]</td>";
			echo "<td >$row[12]</td>";
			echo "<td title='$med'>$combobit</td>";
			echo "<td ><center><input type=image src='images/eliminar-cancelar-icono-4935-16.png' /></center></td>";
			echo "<td ><center><input type=image src='images/comprobar-si-puede-icono-8214-16.png' /></center></td>";
		    echo "</tr>";
		 }
	 }
	?>
</div>
	</td >
   </tr>
    </table >
	<!--</div>-->
	</div>
	


</body>
</html>
<?php
}
?>
