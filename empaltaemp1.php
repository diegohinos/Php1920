<?php
require "../../Funciones/Funciones.php";
require "empaltaemp-funciones.php";
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha=$_POST['fecha'];
$salario=$_POST['salario'];
$dpto=$_POST['departamento'];
$Empleado=array($dni,$nombre,$apellido,$fecha,$salario,$dpto);
for ($i=0; $i < count($Empleado); $i++) { 
    $Empleado[$i]=limpiar_campos($Empleado[$i]);
}
insertar("localhost","root","rootroot","empleadonn",$Empleado);

?>