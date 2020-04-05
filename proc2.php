<?php
include("conexion.php");

$q=$_POST['q'];
$res = mysqli_query($conexion, "select * from profesionales where especialidad='".$q."'"); 

?>
<label for="AppointmentsSpecialitySpeciality">MEDICO </label>
<select name="sele2" id="cont" onchange="load23(this.value)" onclick="javascript:ver2();">
<option value="">Seleccione</option>
<?php while($fila=mysqli_fetch_array($res)){ ?>
<option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['profesional']; ?></option>
<?php } ?>

</select>