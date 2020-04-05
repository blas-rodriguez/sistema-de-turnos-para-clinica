<?php
$cod=$_REQUEST['cod'];
$pr=$_REQUEST['pr'];
$es=$_REQUEST['es'];

session_start();
include("conexion.php");
if(!isset ($_SERVER['primeraPagina']))
{ 
 
    echo "<font size='3' color='#FFFFFF'>
        <br>
		<center>
		<form  action='actualizarblas3.php' method='post'>	
		<input name='cod' type='text' size='5' style='visibility:hidden' value='".$cod."' />
		<font color='BLACK'>OBRA SOCIAL</font>
		<input name='pro' type='text' size='25'  value='$pr' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br>
		<font color='BLACK'>OBSERVACION</font>
		<input name='matri' type='text' size='25'  value='$es' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/>
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
