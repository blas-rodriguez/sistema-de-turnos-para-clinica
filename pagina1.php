<?php
session_start();
include("conexion.php");
$dia=$_REQUEST['cod'];
echo"EL DIA SELECCIONADO ES: ".$dia;


?>