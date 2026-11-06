<?php
include "cabecera.php";

$conexion = mysqli_connect($servidor, $userBD, $passwdBD);
mysqli_select_db($conexion, $nomBD);

$usuario = $_POST["usuario"];
$clave = md5($_POST["clave"]);

$consulta = sprintf("select * from usuarios where nombre='%s' and clave='%s'", $usuario, $clave);
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    echo "Bienvenido " . $usuario;
} else {
    echo "Usuario o clave incorrectos";
}
?>