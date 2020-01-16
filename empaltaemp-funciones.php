<?php
function lista_dpto($servername,$username,$password,$dbname){
    try {
        $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $info = $conexion->prepare("SELECT * from departamento");
        $info->execute();
        // set the resulting array to associative
        $result = $info->fetchAll(PDO::FETCH_ASSOC);
        $array_departamentos=array();
        foreach ($result as $row) {
            array_push($array_departamentos, $row['nombre_dpto']);
            }
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    $conexion = null;
    return $array_departamentos;
    }
function insertar($servername,$username,$password,$dbname,$array){
try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $info = $conexion->prepare("SELECT cod_dpto from departamento where nombre_dpto='$array[5]'");
    $info->execute();
    // set the resulting array to associative
    $result = $info->fetchAll(PDO::FETCH_ASSOC);
    $fecha=gmdate('Y-m-d H:i:s');
    $sql = "INSERT INTO empleado (dni,nombre,apellidos,fecha_nac,salario) VALUES ('$array[0]', '$array[1]','$array[2]', '$array[3]','$array[4]')";
    $conexion->exec($sql);
    foreach($result as $key=>$c)
	{
        foreach($c as $key=>$codigo)
	    {
        $sql1 = "INSERT INTO emple_depart (dni,cod_dpto,fecha_ini,fecha_fin) VALUES ('$array[0]','$codigo', '$fecha',null)";
        $conexion->exec($sql1);
	    }
	}
    
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>