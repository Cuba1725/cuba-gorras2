<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$insertar = "INSERT INTO mensajes_clientes VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

$query = mysqli_query($conectar, $insertar);

if($query){

    echo "<script> alert('El mensaje fue enviado con exito, Gracias por comunicarse con Cuba-Gorras.');
    location.href = '../index.html';
    </script>";
}

?>