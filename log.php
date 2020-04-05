
<?php
include("conexion.php");	
$usr = trim($_REQUEST['usuario']);
$pw = trim($_REQUEST['pass']);	
	//$pass=MD5($pw);
	//$bd_seleccionada = mysql_select_db($database_pdg,$conn_pdg);
	//$sql = "SELECT * FROM pdgtabla WHERE email= '".$usr."'	AND contrasena_ = '".$pass."'	";	
	//$result	=mysql_query($sql,$conn_pdg) or die(mysql_error());
	$result = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='".$usr."'and pass='".$pw."' "); 
	// $i=-1;
	 if (mysqli_num_rows($result)>0)
	 { 	   
	      while($fila=mysqli_fetch_array($result)){
		   $numero=$fila['codigo'];	
		   session_start();
		   $_SESSION['pass']= $pw;
		   $_SESSION['nombre']=$usr;
		   $_SESSION['id']=$numero;	 
		   $_SERVER['primeraPagina'] = $_SESSION['nombre'];
		   //echo "<a href='registro.php'>cambiar mi contraseña</a><br>";
			  //include("ingreso.php");
			  echo "<script language='javascript'>
					 window.location.href = 'ingreso.php';	
                         </script>";
			  }
	}
	else {
		  		   echo "<script language='javascript'>
                     alert('EL USUARIO Y CONTRASEÑA NO SON VALIDOS.');
					 window.location.href = 'ingresar.php';	
                         </script>";
		 }
?>
