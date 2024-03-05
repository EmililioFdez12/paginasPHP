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
    <!-- Ej1-->
    <?php         
         $entero1 = 5;
         $entero2 = 7;
         echo "\nLa suma de las variables enteras es: " . ($entero1 + $entero2);
 
         $flotante1 = 342.2;
         $flotante2 = 233.45;
         echo "\nLa suma de las variables flotantes es: \n" . ($flotante1 - $flotante2);
 
         $cadena1 = " hola";
         $cadena2 = "adios";
         echo $cadena1 . $cadena2; 
     ?>
    <br>
    <!--Ej2 -->
    <?php    
        $variable = 55;

        if ($variable < 50) {
            echo "El número es menor de 50";
        } else {
            echo "El número es mayor de 50 \n";
        }
        ?>
    <br>
    <!-- Ej3 -->
    <?php
    $variable1 = 0;
        if ($variable1 == 0) {
            echo "Cero";
        } else {
            echo $variable1 * $variable1;
        }
     
    ?>
    <br>
    <!-- Ej4 -->
    <?php   
        $numero1 = 26;   
        $numero2 = 25;
        if ($numero1 == $numero2) {
            echo "Los numeros son iguales";
        } elseif ($numero1 > $numero2) {
            echo "El primer número es mayor que el segundo";
        } else {
            echo "El primer número es menor que el segundo";
        }     
    ?>
    <br>
    <!-- Ej5 -->
    <?php   
        $numero1 = random_int(0,9999);   
        if ($numero1 % 3 == 0) {
            echo "El número $numero1 es divisible por 3";
        } else {
            echo "El número $numero1 no es divisible por 3";
        }    
    ?>
    <br>
    <!-- Ej6 -->
    <?php
    $numeroMes = random_int(1,12);

    if ($numeroMes == 1) {
        echo "Enero";
    } elseif ($numeroMes == 2) {
        echo "Febrero";
    } elseif ($numeroMes == 3) {
        echo "Marzo";
    } elseif ($numeroMes == 4) {
        echo "Abril";
    } elseif ($numeroMes == 5) {
        echo "Mayo";
    } elseif ($numeroMes == 6) {
        echo "Junio";
    } elseif ($numeroMes == 7) {
        echo "Julio";
    } elseif ($numeroMes == 8) {
        echo "Agosto";
    } elseif ($numeroMes == 9) {
        echo "Septiembre";
    } elseif ($numeroMes == 10) {
        echo "Octubre";
    } elseif ($numeroMes == 11) {
        echo "Noviembre";
    } elseif ($numeroMes == 12) {
        echo "Diciembre";
    } else {
        echo "Número de mes no válido.";
    }
    ?>
    <br>
    <!-- Ej7 -->
    <?php
    $numero1 = 10;
    $numero2 = 20;

    while ($numero1 < $numero2) {
        echo "$numero1 ";
        $numero1++;
    }
    ?>
    <br>
    <!-- Ej8 -->
    <?php
    $numero1 = 26;
    $suma = 0;

    for ($i=0; $i <= $numero2 ; $i++) { 
        $suma += $i;
    }
        echo $suma;
    ?>


</body>

</html>