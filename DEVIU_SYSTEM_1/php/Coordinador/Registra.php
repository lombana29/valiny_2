<?php

include 'Buscar.php';

$Registro = $_POST["Registro"];
$ID_Estudiante = $_POST["ID_Estu"];
include 'Conexion.php';

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

// SI NO SE HA CONECTADO A LA BD
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BD :c";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD :c");
mysqli_set_charset($conexion, "utf8");

// Realizar la actualización según el tipo de registro
switch ($Registro) {
    case "Falla":
        $consulta = "UPDATE estudiantes SET Registro = 0 WHERE ID_Estudiante = $ID_Estudiante";
        break;
    case "Asiste":
        $consulta = "UPDATE estudiantes SET Registro = 1 WHERE ID_Estudiante = $ID_Estudiante";
        break;
    case "Retardo":
        $consulta = "UPDATE estudiantes SET Registro = 2 WHERE ID_Estudiante = $ID_Estudiante";
        break;
    case "Evasion":
        $consulta = "UPDATE estudiantes SET Registro = 3 WHERE ID_Estudiante = $ID_Estudiante";
        break;
    case "Justificada":
        $consulta = "UPDATE estudiantes SET Registro = 4 WHERE ID_Estudiante = '$ID_Estudiante'";
        break;
}

$resultados = mysqli_query($conexion, $consulta);

if ($resultados) {
    echo "El estado del estudiante es: " . $Registro;
} else {
    echo "Error al actualizar el estado del estudiante :c";
}

?>
