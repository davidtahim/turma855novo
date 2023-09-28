<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirecionar para a página de login se não estiver autenticado
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo ao sistema do PetShop</title>
</head>
<body>
 


</body>
</html>