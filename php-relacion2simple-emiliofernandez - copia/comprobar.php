<html>
<head>
<title>Comprobar datos</title> 

</head>
<body>
<h1>Tus Datos de suscripción: </h1>
<p>Estos son los datos que nos has enviado:</p>
<?php  
echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
echo "apellidos: "; echo $_POST['apellidos']; echo "<br/>";
echo "E-mail: "; echo $_POST['email']; echo "<br/>";
echo "contraseña: "; echo $_POST['contras']; echo "<br/>";
echo "Sexo: "; echo $_POST['sexo']; echo "<br/>";
echo "Estudios: "; echo $_POST['estudios']; echo "<br/>";
echo "Aficiones: \"on\" seleccionado, sin marcar, no seleccionado<br/>";
if ((isset($_POST['musica']))){
echo "Musica: "; echo $_POST['musica']; echo "<br/>";
}
if ((isset($_POST['deportes']))){
    echo "Deportes: "; echo $_POST['deportes']; echo "<br/>";
}
if ((isset($_POST['cine']))){
    echo "Cine: "; echo $_POST['cine']; echo "<br/>";
}
if ((isset($_POST['libros']))){
    echo "Libros: "; echo $_POST['libros']; echo "<br/>";
}
if ((isset($_POST['ciencia']))){
    echo "Ciencia: "; echo $_POST['ciencia']; echo "<br/><br/>";
}
echo "Día de la semana: "; echo $_POST['dia']; echo "<br/>";
echo "Tu comentario: "; echo $_POST['comentario']; echo "<br/>";
?>
<p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
<p>Los datos son correctos: <a href="enviar.html">Enviar</a>
<p>Los datos no son correctos: <a href="formularios.html">Volver a escribirlos</a>

</body>
</html>