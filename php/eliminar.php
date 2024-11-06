<?php

include ("conexdb.php");

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conex->query(" DELETE FROM datos WHERE id=$id ");
    if ($sql == 1) {
        header('Location: ../page/administrador.php');
    }
}