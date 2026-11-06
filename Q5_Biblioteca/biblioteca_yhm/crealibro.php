<?php
include "cabecera.php";

print_r($_POST);
echo "<br>";

$conexion = mysqli_connect($servidor, $userBD, $passwdBD);
mysqli_select_db($conexion, $nomBD);

$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$isbn = $_POST["isbn"];
$puntuacion = $_POST["puntuacion"];
$genero = $_POST["genero"];

//miro si ya existe el isbn
$consulta = sprintf("select * from libros where isbn='%s'", $isbn);
echo $consulta . "<br>";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    echo "Ya existe un libro con ese ISBN";
} else {
    $consulta = sprintf("insert into libros (nombre, autor, isbn, puntuacion, genero) values ('%s', '%s', '%s', %d, '%s')", $nombre, $autor, $isbn, $puntuacion, $genero);
    echo $consulta . "<br>";
    mysqli_query($conexion, $consulta);
    echo "Libro creado";
}
?>