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
  //$num1=$_POST['num'];
  $pass1=strtoupper($_POST['mail']);
  //$pass2 =$_POST['newpass'];
  $user=strtoupper($_POST['nom']);
  $cod=$_POST['cod'];
  
   if(empty($user)){
         echo "<script language='javascript'>
                     alert('NO INGRESO EL NOMBRE DE LA ESPECIALIDAD.');
					 window.close();
              </script>";    
	     exit;
   }
   else{
    //echo "Update especialidades set especialidad='$user', observacion='$pass1' WHERE (codigo=$cod)";
    $sql22= mysqli_query($conexion,"UPDATE especialidades SET   especialidad='$user', observacion='$pass1'  WHERE (codigo=$cod)");
	if (!$sql22) 
		 {
            die('Consulta no válida: '.$cod.' ----'.$user.'------'.$pass1.'--> ' . mysql_errno());
          } 
	    else
	  {
	    echo "<script language='javascript'>
                     alert('LA ESPECIALIDAD FUE MODIFICADA.');
					 window.close();
					 window.opener.location.reload();
              </script>";    
	     exit;
	  } 
     }
	
}
else
{
  echo "TIENE QUE REGISTRARCE PARA PODER MODIFICAR SUS DATOS";
}
?>