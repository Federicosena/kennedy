<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['password'])) {
       
        $password_correcta_hash = '$2b$12$lD835cP/D4KGg0utQ5ADEO0Naho30lVb5IX45.O3i1347u78uxrWa';

        if (password_verify($_POST['password'], $password_correcta_hash)) {
            $_SESSION['loggedin'] = true;
            header('Location: administrador.php');
            exit;
        } else {
            $error = "Contraseña incorrecta. Inténtalo de nuevo.";
        }
    } else {
        $error = "Por favor, introduce la contraseña.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/form.css">
    <title>Acceso - "John F. Kennedy"</title>
 
</head>
<body>

    <form action="form-admin.php" method="POST">
        <h1>Acceso Administrativo</h1>
        <label for="password">Introduce la contraseña:</label>
        <div class="password-container">
            <input type="password" id="password" name="password" required oninput="checkPassword()">
            <img src="../img/icon/vista.png" class="toggle-password" onclick="togglePassword()" alt="Ver contraseña">
        </div>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <input type="submit" value="Acceder">
    </form>

    <script src="../js/icon.js"></script>

</body>
</html>
