<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydrugs";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
