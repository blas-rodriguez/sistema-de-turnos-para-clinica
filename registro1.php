<?php

session_start();
if(!isset ($_SERVER['primeraPagina']))
{ 
 
    echo "<font size='3' color='#FFFFFF'>
        <br>
		<center>
		<form  action='blas.php' method='post'>	
		<font color='BLACK'>NOMBRE DE USUARIO</font>
		<input name='nom' type='text' size='25'  value=".$_SESSION['nombre']." /><br>	
		<font color='BLACK'>CONTRASEÑA ACTUAL</font>
		<input name='mail' type='text' size='25'  value=".$_SESSION['pass']." /><br>
		<input name='num' type='text' size='5' style='visibility:hidden'   value=".$_SESSION['id']."  /><br>
        <font color='BLACK'>CONTRASEÑA NUEVA</font>
		<input name='newpass' type='password' size='25' value='' /><br><br>	
        <input type='submit' value='GUARDAR' name='boton'  >
        </center>
	    </font>
	    </form>";	//style='visibility:hidden' 

}
else
{
  echo "TIENE QUE REGISTRARCE PARA PODER MODIFICAR SUS DATOS";
}	
?>
