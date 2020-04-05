<?php

session_start();
if(!isset ($_SERVER['primeraPagina']))
{ 
 
    echo "<font size='3' color='#FFFFFF'>
        <br>
		<center>
		<form  action='blas1.php' method='post'>	
		<font color='BLACK'>ESPECIALIDAD</font>
		<input name='nom' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br>	
		<font color='BLACK'>OBSERVACION</font>
		<input name='mail' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br> <br>
        <input type='submit' value='GUARDAR' name='boton'  >
        </center>
	    </font>
	    </form>";	//style='visibility:hidden' 

}
else
{
  echo "TIENE QUE REGISTRARCE PARA PODER MODIFICAR SUS DATOS";
}	
	 //	<input name='num' type='text' size='5' style='visibility:hidden'   value=".$_SESSION['id']."  /><br>
     //   <font color='BLACK'>OBSERVACION</font>
	 //	<input name='newpass' type='password' size='25' value='' /><br><br>	
?>
