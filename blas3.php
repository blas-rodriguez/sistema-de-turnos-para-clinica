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
  $nom=strtoupper($_POST['pro']);
  $matri=strtoupper($_POST['matri']);
 
   if(empty($nom)){
         echo "<script language='javascript'>
                     alert('NO INGRESO EL NOMBRE DE LA OBRA SOCIAL.');
					 window.close();
              </script>";    
	     exit;
   }
   else{
    $sql2= mysqli_query($conexion,"INSERT INTO os (os, observacion) VALUES('$nom','$matri')");
	if (!$sql2) 
		 {
            die('Consulta no válida: ' . mysql_error());
          } 
	    else
	  {
	    echo "<script language='javascript'>
                     alert('LA OBRA SOCIAL FUE CARGADA.');
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