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
                        open(url,'','top=250,left=350,width=300,height=380') ; 
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
 	</div>
		<div id="menu">
			<ul>
				<li ><a href="ingreso.php" accesskey="5" title="">TURNOS RECIENTES</a></li>
				<li><a href="turnosxmes.php" accesskey="5" title="">TURNOS POR MES</a></li>
				<li><a href="consultas.php" accesskey="5" title="">CONSULTAS</a></li>
				<li class="active"><a href="otros.php" accesskey="5" title="">OTROS</a></li>
				<li><a href="salir.php" accesskey="5" title="">CERRAR SESION</a></li>
			</ul>
		</div>
	</div>

	<!--<div id="banner" class="container">-->
	<table  border='0'  >
    <tr >
    <td VALIGN=TOP >
		<!--<div class="title">-->
            <h2>PROFESIONALES</h2>
			<div id="menu1">
			 <ul>
			  <li><a href="otros.php" title="ESPECIALIDADES">Especialidades</a></li>
			  <li><a href="profes.php" title="PROFESIONALES">Profesionales</a></li>
			  <li><a href="os.php" title="PROFESIONALES">obras sociales</a></li>
			  <li><a href="usu.php" title="TURNOS ELIMINADOS">Usuarios</a></li>
			  <li><a href="javascript:abrir('registro.php')" title="TURNOS CONFIRMADOS">Modificar cuenta</a></li>
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
	 echo "<th scope='col'>CODIGO </th>";
	 echo "<th scope='col'>PROFESIONAL </th>";//encabezado
	 echo "<th scope='col'>ESPECIALIDAD</th>";
	 echo "<th scope='col'>DNI</th>";
     echo "<th scope='col'>NACIMIENTO</th>";
	 echo "<th scope='col'>MATRICULA</th>";
	 echo "<th scope='col'>DOMICILIO</th>";
	 echo "<th scope='col'>BARRIO</th>";
	 echo "<th scope='col'>ESTADO</th>";
	 echo "<th scope='col'>ELIMINAR</th>";
	 echo "<th scope='col'>MODIFICAR</th>";
	 echo "</tr>","</thead>","</center>";
	 

     $result = mysqli_query($conexion, "SELECT * FROM profesionales  "); 
	 if (mysqli_num_rows($result)>0)
	 {	 
	     while($row =  mysqli_fetch_array($result)) 
	     {
		    //$sql1="SELECT * from especialidades where codigo=".$row[1];
            $sql1="SELECT * from especialidades where codigo=".$row[2];
	        $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
      	    $combobit="";
			if ($result1->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{				
				while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
				{
					$combobit .=$row1['especialidad']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
		   	echo "<tr style='background-color: BLUE;'>";
			echo "<td title='hola'>$row[0]</td>";
			echo "<td >$row[1]</td>";
			echo "<td >$combobit</td>";
			echo "<td >$row[3]</td>";			
			echo "<td >$row[4]</td>";
			echo "<td >$row[5]</td>";
			echo "<td >$row[6]</td>";
			echo "<td >$row[7]</td>";
			if($row[8]==0){
			  			echo "<td >ACTIVO</td>";
			     }
			else{
			            echo "<td >BAJA</td>";
			    }

		echo "<td title='ELIMINAR'><center><a onclick='return confirmDel();'  href='eliminar.php?cod=2&reg=$row[0]' ><IMG src='images/eliminar-cancelar-icono-4935-16.png' /></a></center></td>";?>
		<td title="MODIFICAR"><center><a href="javascript:abrir('<?php echo "modificarprofes.php?cod=$row[0]&pr=$row[1]&es=$row[2]&dni=$row[3]&nac=$row[4]&mt=$row[5]&dom=$row[6]&bar=$row[7]"; ?>')"><input type=image src="images/modificar.png" /></a></center></td>
		  <?php 
		  echo "</tr>";
		 }
		 //echo "<td style='background-color: BLUE;' title='AGREGAR UN PROFESIONAL'><center><input type=image src='images/agregar1.png' /></center></td>";
	 }
	?>
</div>
 <td style="background-color: BLUE;" title="AGREGAR UN PROFESIONAL"><center><a href="javascript:abrir('registroprofes.php')"><img src="images/agregar1.png"></a></center>
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
