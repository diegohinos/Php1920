<?php
require "empaltaemp-funciones.php";
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha=$_POST['fecha'];
$salario=$_POST['salario'];
$dpto=$_POST['departamento'];
$Empleado=array($dni,$nombre,$apellido,$fecha,$salario,$dpto);

insertar("10.129.6.54","root","rootroot","empleadosnm",$Empleado);

?>
