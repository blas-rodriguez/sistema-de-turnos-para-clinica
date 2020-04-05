<?php

session_start();
include("conexion.php");
if(!isset ($_SERVER['primeraPagina']))
{ 
 
    echo "<font size='3' color='#FFFFFF'>
        <br>
		<center>
		<form  action='blas2.php' method='post'>	
		<font color='BLACK'>PROFESIONAL</font>
		<input name='pro' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br>";
			

			$res = mysqli_query($conexion, "SELECT * FROM especialidades "); 
			echo"<font color='BLACK'>ESPECIALIDAD</font>";			
			echo"<select name='sele1' id='cont'  onchange='load22(this.value)'>";
			echo"<option value=''>Seleccione</option>";			
			while($fila=mysqli_fetch_array($res)){
			?>
			<option value="<?php echo $fila['codigo']; ?>"><?php echo trim($fila['especialidad']); ?></option>
			<?php
			}
			echo"</select><br>";
		echo"<font color='BLACK'>DOCUMENTO</font>
		<input name='dni' type='number' size='25' /><br> 
		<font color='BLACK'>NACIMIENTO</font>
		<input name='nac' type='date' size='25'  /><br> 
		<font color='BLACK'>MATRICULA</font>
		<input name='matri' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br> 
		<font color='BLACK'>DOMICILIO</font>
		<input name='dom' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br> 
		<font color='BLACK'>BARRIO</font>
		<input name='barri' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br> <br>
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
