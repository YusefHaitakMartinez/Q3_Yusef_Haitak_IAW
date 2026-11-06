<html>
<body>
<h1>Mostrar libros</h1>
<?php
include "cabecera.php";

$conexion = mysqli_connect($servidor, $userBD, $passwdBD);
mysqli_select_db($conexion, $nomBD);

if (empty($_POST["puntuacion"])) {
    $consulta = "select * from libros";
} else {
    $consulta = sprintf("select * from libros where puntuacion=%d", $_POST["puntuacion"]);
}
echo $consulta;
$resultado = mysqli_query($conexion, $consulta);
?>
<form action="mostrarlibros.php" method="post">
<table>
<tr>
<td>Nombre</td><td><input type="text" name="nombre"></td>
<td>Autor</td><td><input type="text" name="autor"></td>
<td>ISBN</td><td><input type="text" name="isbn"></td>
<td>Puntuacion</td><td><select name="puntuacion">
<option value="">-</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select></td>
<td>Genero</td><td><input type="text" name="genero"></td>
<td><input type="submit" value="Enviar"></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr><td>" . $fila["id"] . "</td><td>" . $fila["nombre"] . "</td><td>" . $fila["autor"] . "</td><td></td><td>" . $fila["isbn"] . "</td><td></td><td>" . $fila["puntuacion"] . "</td><td></td><td>" . $fila["genero"] . "</td></tr>";
}
?>
</table>
</form>
</body>
</html>