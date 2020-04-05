<?php

session_start();
include("conexion.php");
if(!isset ($_SERVER['primeraPagina']))
{ 
 $fc=$_REQUEST['fc'];
 $hr=$_REQUEST['hr'];
 $cesp=$_REQUEST['cesp'];
 $cmed=$_REQUEST['cmed'];
  $sql1="SELECT * from especialidades where codigo=".$cesp;
	        $result1 = $conexion->query($sql1); //usamos la conexion para dar un resultado a la variable
      	    $combobit="";
			if ($result1->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{				
				while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
				{
					$combobit .=$row1['especialidad']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
	  $sql2="SELECT * from profesionales where codigo=".$cmed;
	        $result2 = $conexion->query($sql2); //usamos la conexion para dar un resultado a la variable
      	    $combobit1="";
			if ($result2->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
			{				
				while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) 
				{
					$combobit1 .=$row2['profesional']; //concatenamos el los options para luego ser insertado en el HTML
				}
			}
 
    echo "<font size='3' color='#FFFFFF'>
        <br>
		<center>
		<form  action='realizado2.php' method='post'>
		<input name='cesp' type='text' size='5' style='visibility:hidden' value='".$cesp."' />
		<input name='cmed' type='text' size='5' style='visibility:hidden' value='".$cmed."' />	<br> 
		<font color='BLACK'>FECHA:</font>
		<input name='fc' type='date' size='25' value='$fc' /><br> 
		<font color='BLACK'>HORA:</font>
		<input name='hr' type='text' size='25' value='$hr' /><br> 
		<font color='BLACK'>ESPECIALIDAD:</font>
		<input name='cesp1' type='text' size='25' value='$combobit' /><br>
		<font color='BLACK'>PROFESIONAL:</font>
		<input name='cmed2' type='text' size='25' value='$combobit1' /><br>
		
		<font color='BLACK'>DOCUMENTO</font>
		<input name='dni' type='number' size='25' /><br> 
		<font color='BLACK'>APELLIDO Y NOMBRE:</font>
		<input name='nobre' type='text' size='25' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br> 
		<font color='BLACK'>DOMICILIO:</font>
		<input name='dom' type='text' size='25' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();' /><br> 
		<font color='BLACK'>TELEFONO:</font>
		<input name='tel' type='text' size='25'  value='' /><br> <br>
		<font color='BLACK'>OBRA SOCIAL:</font>";
		
				$res = mysqli_query($conexion, "SELECT * FROM os "); 
						
			echo"<select name='os' id='cont'  onchange='load22(this.value)'>";
			echo"<option value=''>Seleccione</option>";			
			while($fila=mysqli_fetch_array($res)){
			?>
			<option value="<?php echo $fila['codigo']; ?>"><?php echo trim($fila['os']); ?></option>
			<?php
			}
		echo"</select><br><br>";
		echo"<font color='BLACK'>NUMERO DE AFILIADO:</font>
		<input name='nroafi' type='text' size='25'  value='' style'text-transform:uppercase;' onkeyup='javascript:this.value=this.value.toUpperCase();'/><br> <br>
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
