<?php
$monto = $_POST["monto"];
$dbname = "negocio_ventas";

$conn = new mysqli(NULL, `$monto`, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>