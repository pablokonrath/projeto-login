<?php
session_start();

$servername = "db";
$username = "pabloak";
$password = "123456";
$dbname = "meudb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT id FROM users WHERE username = '$user' and password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['meudb'] = $user;
        header("location: bem-vindo.php");
    } else {
        echo "seu nome de usuario ou senha incorreta";
    }
}
?>
