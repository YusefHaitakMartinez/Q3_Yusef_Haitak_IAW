<!DOCTYPE html>
<html>
<head>
    <title>Mi primera página PHP</title>
</head>
<body>
    <h1>Bienvenido a mi servidor LAMP</h1>
    
    <?php

        $nombre = "Yusef";
        $numero1 = 5;
        $numero2 = 10;
        
        $suma = $numero1 + $numero2;

        echo "<p>Hola, mi nombre es " . $nombre . ". mi entorno PHP está funcionando perfectamente.</p>";
        echo "<p>El resultado dinámico de sumar $numero1 y $numero2 es: <strong>$suma</strong></p>";
    ?>
    
    <p>Esta última línea vuelve a ser HTML estático normal. Esta es una modificación del archivo para verificar vinculación de VS Code y Github.</p>
</body>
</html>
