<!DOCTYPE html>
<html>
<head>
    <title>Registro de Ventas</title>
</head>
<body>
    <h1>Registro de Ventas</h1>
    <?php
    require_once("conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = $_POST["monto"];
        $sql = "INSERT INTO ventas (monto) VALUES ('$monto')";

        if ($conn->query($sql) === TRUE) {
            $total_ventas = $conn->query("SELECT SUM(monto) AS total FROM ventas")->fetch_assoc()["total"];
            
            if ($total_ventas >= 500000) {
                // Aquí enviarías la notificación al encargado (puede ser por correo electrónico, SMS, etc.)
                echo "¡El umbral de $500,000 ha sido alcanzado! Se ha enviado una notificación al encargado.";
            } else {
                echo "Venta registrada correctamente.";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
    ?>
</body>
</html>
