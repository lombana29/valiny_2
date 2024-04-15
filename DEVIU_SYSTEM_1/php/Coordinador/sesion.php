<?php

include 'Ingreso.php';

$ID_Admin = $_POST["ID_Admin"];
$Contrasenia = $_POST["Contrasenia"];

include 'Conexion.php';

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

// SI NO SE HA CONECTADO A LA BD
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BD :c";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD :c");
mysqli_set_charset($conexion, "utf8");

$consulta = "select count(0) from clave where contrasenia = HEX(aes_encrypt('$Contrasenia','HJCJ75'))";
$resultados = mysqli_query($conexion, $consulta);

$consulta2 = "select count(0) from Administradores where ID_Admin = '$ID_Admin'";
$resultados2 = mysqli_query($conexion, $consulta2);

if ($fila2 = mysqli_fetch_row($resultados2)) {
    switch ($fila2[0]) {
        case 1:
            if ($fila = mysqli_fetch_row($resultados)) {
                switch ($fila[0]) {
                    case 1:
?>
                        <div class="conteiner">
                            <div class="row justify-content-center">
                                <div class="col-xl-5 col-md-8">
                                    <div class="log">
                                        <form class="rounded-5 shadow-5-strong p-5" method="POST" action="usuario.php">
                                            <h3 class="Seleccionar"> </h3>
                                            <a href="Inicio.php">Ir a inicio</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php
                        break;
                    case 0:
                        echo "La Contraseña están mal";
                        break;
                }
            } else {
            }
            break;
        case 0:
            echo "EL Usuario están mal";
            break;
    }
} else {
}
?>