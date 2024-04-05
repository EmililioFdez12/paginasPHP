<?php
// Configuración de la base de datos
$server = "localhost:3307"; 
$bd = "miBD";
$user = "root";
$password = "";

// Conexión a la base de datos utilizando mysqli_connect
// hay que tener en cuenta que la BD no está creada
$connection2 = mysqli_connect($server, $user, $password, $bd);

// Verificar la conexión
if (!$connection2) {
    die ("Error al conectar a la base de datos: "). mysqli_connect_error($connection2);
}

function createRecord ($connection2, $nombre, $edad, $fechaNacimiento, $hijos, $domicilio) {
    $crearRegistro = "INSERT INTO usuarios (nombre, edad, fechaNacimiento, hijos, domicilio) VALUES ('$nombre', '$edad','$fechaNacimiento', '$hijos', '$domicilio')";
    mysqli_query($connection2 , $crearRegistro);
}

// Crear un registro nuevo con los datos introducidos en el formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$hijos = $_POST['hijos'];
$domicilio = $_POST['domicilio'];

createRecord($connection2, $nombre, $edad, $fechaNacimiento, $hijos, $domicilio);

// Cerrar la conexión
mysqli_close($connection2);
?>