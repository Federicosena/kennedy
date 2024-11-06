<?php
include ('conexdb.php');

//Recibir datos
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

//Insertar datos
$insertar = "INSERT INTO datos(titulo, descripcion) VALUES ('$titulo', '$descripcion')";

//Ejecutar consulta
$resultado = mysqli_query($conex, $insertar);

if (!$resultado) {
    echo 'Error al registrar';
} else {
    header('Location: ../page/administrador.php');
}