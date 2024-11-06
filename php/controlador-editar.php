<?php

include ('conexdb.php');

if (!empty($_POST["btnRegistrar"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["descripcion"])) {
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $sql = $conex->query(" UPDATE datos SET titulo='$titulo', descripcion='$descripcion' WHERE id=$id");

        if ($sql == 1) {
            header('Location: ../page/administrador.php');
        } else {
            echo 'Error al modificar';
        }
    } else {
        echo "Por favor, rellene todos los campos.";
    }
}