<?php

include 'Optimizacion_Asistencia.php';

$Contar = $_POST["Contar"];


include 'Conexion.php';


$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

// SI NO SE HA CONECTADO A LA BD
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BD :c";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD :c");
mysqli_set_charset($conexion, "utf8");



switch ($Contar){
    case "Falla":
        $consulta = "select count(ID_Estudiante) from estudiantes where Registro = 0";
        $resultados = mysqli_query($conexion, $consulta);
        break;
    case "Asiste":
        $consulta = "select count(ID_Estudiante) from estudiantes where Registro = 1";
        $resultados = mysqli_query($conexion, $consulta);
        break;
    case "Retardo":
        $consulta = "select count(ID_Estudiante) from estudiantes where Registro = 2";
        $resultados = mysqli_query($conexion, $consulta);
        break;
    case "Evasion":
        $consulta = "select count(ID_Estudiante) from estudiantes where Registro = 3";
        $resultados = mysqli_query($conexion, $consulta);
        break;
    case "Justificada":
        $consulta = "select count(ID_Estudiante) from estudiantes where Registro = 4";
        $resultados = mysqli_query($conexion, $consulta);
        break;
}
while ($fila = mysqli_fetch_row($resultados)){
    ?>

    <P>La cantidad de estudiantes es: <?php echo $fila[0]?> </P>
    
    <?php
    
}


?>