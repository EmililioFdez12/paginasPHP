<?php

$servidor = "localhost:3307"; // servidor local establecida en el puerto 3307
                              // Hay que revisar el puerto que utiliza mySQLi
$usuario = "root";
$pass = "";
$bd = "prueba";

// Establecemos conexión con la BD:
$conexion = mysqli_connect($servidor, $usuario, $pass, $bd);

if (!$conexion){
      echo "No se puede conectar con el servidor";
}else{  
      $nombre = $_POST['nombre'];
      $edad = $_POST['edad'];

      //Introducimos los valores del formulario en la BD:
      $sql = "INSERT INTO datos (nombre, edad) VALUES ('$nombre', '$edad')";

      if (mysqli_query($conexion, $sql)) {
            echo "Datos introducidos correctamente <br /><a href='./index.html'>Volver</a>";
      } else {
            echo "Error, no se ha podido establecer la conexión ";
      }
      // Cerramos la conexión:
      mysqli_close($conexion);
} 
?>
