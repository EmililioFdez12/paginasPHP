<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Esto es HTML</h1>

    <?php
        echo "Esto es PHP";
        
    ?>
    <br>
    <?php    
        $variable = 55;

        if ($variable < 50) {
            echo "El número es menor de 50";
        } else {
            echo "El número es mayor de 50 \n";
        }
        ?>

    <br>

    <?php
         
        $entero1 = 5;
        $entero2 = 7;
        echo "\nLa suma de las variables enteras es: " . ($entero1 + $entero2);

        $flotante1 = 342.2;
        $flotante2 = 233.45;
        echo "\nLa suma de las variables flotantes es: \n" . ($flotante1 - $flotante2);

        $cadena1 = "hola";
        $cadena2 = "adios";
        echo $cadena1 . $cadena2;

    ?>

    <?php
     
    ?>

</body>

</html>