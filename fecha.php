<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        // Establecer la configuración regional en español
        setlocale(LC_ALL, 'spanish');

        echo "La fecha de hoy es: ";
        $fecha = strftime("%A %d de %B del %Y");
        echo $fecha;
        echo "<br>";

        echo "La hora actual es: ";
        $hora = date("H:i:s");
        echo $hora;
        echo "<br>";
        ?>
        <a href="fecha2.php">fecha2.php</a>
    </body>
</html>
