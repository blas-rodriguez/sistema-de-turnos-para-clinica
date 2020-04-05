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
  $cod=$_POST['cod'];
  $nom=strtoupper($_POST['pro']);
  $esp=$_POST['sele1'];
  $dni=$_POST['dni'];
  $nac=$_POST['nac'];
  $matri=strtoupper($_POST['matri']);
  $dom=strtoupper($_POST['dom']);
  $barri=strtoupper($_POST['barri']);

 
   if(empty($nom)){
         echo "<script language='javascript'>
                     alert('NO INGRESO EL NOMBRE DEL PROFECIONAL.');
					 window.close();
              </script>";    
	     exit;
   }
   else{
 $sql2= mysqli_query($conexion,"UPDATE profesionales SET profesional='$nom', especialidad='$esp', dni='$dni', fechanac='$nac', matricula='$matri', domicilio='$dom', barrio='$barri' WHERE (codigo=$cod)");
	if (!$sql2) 
		 {
            die('Consulta no válida: ' . mysql_error());
          } 
	    else
	  {
	    echo "<script language='javascript'>
                     alert('EL PROFECIONAL FUE MODIFICADO.');
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