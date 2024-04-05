<?php
function actualizarRegistro($id, $nombre, $edad, $fechaNacimiento, $hijos, $domicilio) {
    global $connection2;
    $actualizar = "UPDATE usuarios SET nombre='$nombre', edad='$edad', fechaNacimiento = '$fechaNacimiento', hijos='$hijos', domicilio = '$domicilio'  WHERE id=$id";
    return mysqli_query($connection2, $actualizar);
} 

$server = "localhost:3307"; 
$bd = "miBD";
$user = "root";
$password = "";

$valor = $_POST['identificador'];
$nvoNombre = $_POST['nvonombre'];
$nvoEdad = $_POST['nvoedad'];
$nvofechaNacimiento = $_POST['nvofechaNacimiento'];
$nvohijos = $_POST['nvohijos'];
$nvodomicilio = $_POST['nvodomicilio'];

$connection2 = mysqli_connect($server, $user, $password, $bd);
if (!$connection2) {
    die ("Error al conectar a la base de datos: ". mysqli_connect_error());
}

actualizarRegistro($valor, $nvoNombre, $nvoEdad, $nvofechaNacimiento, $nvohijos, $nvodomicilio);

mysqli_close($connection2);
?>
