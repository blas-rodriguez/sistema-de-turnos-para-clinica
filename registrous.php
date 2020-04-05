<?php

session_start();
include("conexion.php");
if(!isset ($_SERVER['primeraPagina']))
{ 
 
    echo "<font size='3' color='#FFFFFF'>
        <br>
		<center>
		<form  action='blas4.php' method='post'>	
		<font color='BLACK'>NOMBRE DE USUARIO</font>
		<input name='pro' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br>
		<font color='BLACK'>CONTRASEÑA</font>
		<input name='matri' type='text' size='25'  /><br>
		<font color='BLACK'>CARGO JERARQUICO</font>
		<SELECT NAME='sele1' SIZE=1 > 
        <OPTION VALUE='1'>ADMINISTRADOR</OPTION>
        <OPTION VALUE='2'>OPERADOR</OPTION>
        </SELECT><br>
		<font color='BLACK'>CORRO ELECTRONICO</font>
		<input name='mail' type='text' size='25'  />
		<br> <br>
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
