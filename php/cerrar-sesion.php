<?php   

session_start();

session_unset();

session_destroy();

header('Location: ../page/form-admin.php');

?>