<?php

$conex = new mysqli("localhost", "root", "", "escueladb");

// *Verificar conexión

if ($conex->connect_error) {
    die("Conexion fallida: " . $conex->connect_error);
}