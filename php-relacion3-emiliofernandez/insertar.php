<?php
$servidor = "localhost:3307";
$usuario = "root";
$pass = '';
$bd = "prueba";

$conexion = mysqli_connect($servidor, $usuario, $pass, $bd);

if (!$conexion){
    echo "No se puede conectar con el servidor";
} else {  
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $fisico = $_POST['fisico'];
    $aficiones = isset($_POST['aficiones']) ? implode(",", $_POST['aficiones']) : "NS/NC";
    $sexo = $_POST['sexo'];
    $categoria = $_POST['categoria'];
    $comentario = $_POST['comentario'];

    //Introducimos los valores del formulario en la BD:
    $sql = "INSERT INTO datospersonales (Nombre, Apellidos, Email, Contraseña, Fisico, Aficiones, Sexo, Categoria, Opinion) 
    VALUES ('$nombre', '$apellidos', '$email', '$contraseña', '$fisico', '$aficiones', '$sexo', '$categoria', '$comentario')";

    if (mysqli_query($conexion, $sql)) {
        echo "Datos introducidos correctamente <br /><a href='./index.html'>Volver</a>";
    } else {
        echo "Error, no se ha podido establecer la conexión ";
    }

    mysqli_close($conexion);
} 
?>