<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        setlocale(LC_ALL, 'spanish');
        echo "La fecha de hoy es:";
        $fecha = strftime("%A %d de %B del %Y");
        echo $fecha;
        echo"<br>";
        ?>
        <a href="fecha3.php">fecha3</a>
    </body>
</html>