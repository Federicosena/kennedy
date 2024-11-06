<?php
session_start();

// Verifica si el usuario ha iniciado sesión, es decir, si la contraseña está en la sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Si no ha iniciado sesión, redirige al login
    header('Location: form-admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/administrador.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <title>Administrador - John F. Kennedy</title>
</head>

<body>
    <aside>
        <h1>Añadir Noticia</h1>
        <form action="../php/enviardb.php" method="post" class="añadir" id="noticiaForm">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" required>
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            <div class="container-btn">
                <input type="submit" value="Enviar" class="btn" id="submitBtn" disabled>
            </div>
        </form>
        <a href="../php/cerrar-sesion.php" class="btn-cerrar-sesion">Cerrar Sesión</a>
    </aside>

    <main>
        <section>
            <h1>Apartado De Noticias</h1>
            <br>
            <div class="container-noticia">
                <?php
                include('../php/conexdb.php');

                $sql = "SELECT * FROM datos";
                $resultado = $conex->query($sql);

                while ($fila = $resultado->fetch_object()) { ?>

                    <div class="noticia">
                        <h2>
                            <?= $fila->titulo ?>
                        </h2>
                        <p>
                            <?= $fila->descripcion ?>
                        </p>
                        <div class="evento">
                            <a href="../php/editar.php?id=<?= $fila->id ?>" class="btn-edit">Editar</a>
                            <a href="../php/eliminar.php?id=<?= $fila->id ?>" class="btn-delet">Eliminar</a>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </section>

        <dialog id="formDialog">
            <header>
                <img src="../img/icon/MaterialSymbolsClose.svg" id="cancel" alt="Imagen de cerrar">
                <h1>Añadir noticia</h1>
            </header>
            <form action="../php/enviardb.php" method="post" class="añadir" id="noticiaFormDialog">
                <label for="tituloDialog">Título</label>
                <input type="text" name="titulo" id="tituloDialog" required>
                <label for="descripcionDialog">Descripción</label>
                <textarea name="descripcion" id="descripcionDialog" cols="30" rows="10" required></textarea>
                <div class="container-btn">
                    <input type="submit" value="Enviar" class="btn" id="submitBtnDialog" disabled>
                </div>
            </form>
        </dialog>

        <nav class="nav">
            <a href="../php/cerrar-sesion.php" class="link-btn"><img src="../img/icon/salir.svg"
                    alt="Imagen de salir"></a>
            <img class="dialog" id="addNotice" src="../img/icon/añadir.svg" alt="Imagen de añadir">
        </nav>
    </main>

    <script>
        (function () {
            var addNotice = document.getElementById("addNotice");
            var cancelButton = document.getElementById("cancel");
            var formDialog = document.getElementById("formDialog");

            // Update button opens a modal dialog
            addNotice.addEventListener("click", function () {
                formDialog.showModal();
            });

            // Form cancel button closes the dialog box
            cancelButton.addEventListener("click", function () {
                formDialog.close();
            });
        })();
    </script>

    <script src="../js/modulo.js"></script>
</body>

</html>