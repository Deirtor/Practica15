<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        
        <?php
            $dato=date("L");
            if($dato==1)
            echo "Año bisiesto";
            else
            echo "Año no bisiesto";
            echo"<br>";
            echo "dia de la semana:";
            $dato=date("W");
            switch($dato){
                case 0: echo "domingo";break;
                case 1: echo "Lunes";break;
                case 2: echo "Martes";break;
                case 3: echo "Miercoles";break;
                case 4: echo "Jueves";break;
                case 5: echo "Viernes";break;
                case 6: echo "Sabado";break;

            }
        ?>
        
    </body>
</html>