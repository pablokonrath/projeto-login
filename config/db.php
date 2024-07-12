<?php
$servername = "db";
$username = "pabloak";
$password = "123456";
$dbname = "meudb";

// criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>