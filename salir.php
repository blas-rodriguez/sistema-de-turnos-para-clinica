
<?php
include("conexion.php");	
session_start();
session_unset();
session_destroy();
echo "<script language='javascript'>
            alert('LA SECION FUE CERRADA CON EXITO. HASTA LUEGO');
     		window.location.href = 'index.php';	
      </script>";

?>
