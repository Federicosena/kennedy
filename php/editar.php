<?php
include('conexdb.php');

$id = $_GET["id"];
$sql = $conex->query("SELECT * FROM datos WHERE id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="../css/editar.css">
    <title>Editar Noticia - John F. Kennedy</title>
</head>

<body>
   
    <form action="controlador-editar.php" method="POST">
    <h1>Editar Noticia</h1>
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
        <?php while ($datos = $sql->fetch_object()) { ?>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($datos->titulo) ?>">

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="<?= htmlspecialchars($datos->descripcion) ?>">
        <?php } ?>
        <input type="submit" value="Modificar" name="btnRegistrar">
    </form>
</body>

</html>
