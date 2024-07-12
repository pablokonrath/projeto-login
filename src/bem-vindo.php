<?php
session_start();
if(!isset($_SESSION['meudb'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
</head>
<body>
    <h1>Bem Vindo <?php echo $_SESSION['meudb']; ?></h1>
    <h2><a href="logout.php">Sair da sessão</a></h2>
</body>
</html>