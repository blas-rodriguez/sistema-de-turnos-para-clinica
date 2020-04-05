<script> 
//creamos la variable ventana_secundaria que contendrá una referencia al popup que vamos a abrir 
//la creamos como variable global para poder acceder a ella desde las distintas funciones 
var ventana_secundaria 

function cerrarVentana(){ 
//la referencia de la ventana es el objeto window del popup. Lo utilizo para acceder al método close 
ventana_secundaria.close() 
} 
</script> 
<?php
session_start();
if(!isset ($_SERVER['primeraPagina']))
{  
  include("conexion.php");
  $num1=$_POST['num'];
  $pass1=$_POST['mail'];
  $pass2 =$_POST['newpass'];
  $user=$_POST['nom'];
  $result = mysqli_query($conexion, "SELECT * FROM usuarios where codigo='".$num1."'");
   if (mysqli_num_rows($result)>0)
   { 
   if(empty($pass2) )
     {
    $sql1= mysqli_query($conexion,"Update usuarios set usuario='$user' WHERE (codigo='$num1')");
	if (!$sql1) 
		 {
            die('Consulta no válida: ' . mysql_error());
          }  
    else
	  { 
	    unset($_SESSION['nombre']);
	    $_SESSION['nombre']=$user;
	    echo "<script language='javascript'>
                     alert('EL NOMBRE DE USUARIO FUE MODIFICADO.');
					 window.close();
					 
              </script>";    
	     exit;
	  } 
     }
   else
	 {
     $sql2= mysqli_query($conexion,"Update usuarios set usuario='$user', pass='$pass2' WHERE (codigo='$num1')");
	if (!$sql2) 
		 {
            die('Consulta no válida: ' . mysql_error());
          } 
	    else
	  {
	    unset($_SESSION['nombre']);
		unset($_SESSION['pass']);
		$_SESSION['pass']= $pass2;
	    $_SESSION['nombre']=$user;
	    echo "<script language='javascript'>
                     alert('EL NOMBRE DE USUARIO Y CONTRASEÑA FUE MODIFICADA.');
					 window.close();
              </script>";    
	     exit;
	  }   
     }
	}
}
else
{
  echo "TIENE QUE REGISTRARCE PARA PODER MODIFICAR SUS DATOS";
}
?>