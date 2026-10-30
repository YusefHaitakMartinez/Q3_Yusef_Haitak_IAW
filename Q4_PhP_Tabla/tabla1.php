<html>
<head>
<meta charset="UTF-8">
<title>Tabla de divisores</title>
<style>
    table { border: 1px solid gray; }
    td { border: 1px solid gray; padding: 3px 8px; font-size: 20px; }
    .cabecera { background-color: #cc99ff; }
    .esquina { background-color: #6677ee; }
    .amarillo { background-color: #ffffaa; }
    .naranja { background-color: #ffcc99; }
</style>
</head>
<body>
<h2>Divisores de los números del 50 al 60</h2>
<table>
<?php

echo "<tr>";
echo "<td class='esquina'></td>";
for ($i = 50; $i <= 60; $i++) {
    echo "<td class='cabecera'>$i</td>";
}
echo "</tr>";

for ($d = 1; $d <= 10; $d++) {
    if ($d % 2 == 0) {
        $color = "naranja";
    } else {
        $color = "amarillo";
    }

    echo "<tr>";
    echo "<td class='cabecera'>$d</td>";
    for ($i = 50; $i <= 60; $i++) {
        if ($i % $d == 0) {
            echo "<td class='$color'>*</td>";
        } else {
            echo "<td class='$color'>-</td>";
        }
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>