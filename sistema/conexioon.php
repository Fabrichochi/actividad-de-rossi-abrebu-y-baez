<?php
$id_cliente = $_POST["cliente"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$descripcion = $_POST["descripcion"];

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "aluminios") or die("No se puede conectar: " . mysqli_connect_error());

// Insertar datos en la tabla
$insertar = "INSERT INTO `datos_clientes` (`id_cliente`, `nombre`, `email`, `telefono`, `descripcion`) 
             VALUES (NULL, '$nombre', '$email', '$telefono', '$descripcion')";

if (mysqli_query($conexion, $insertar)) {
    echo "Los datos se guardaron correctamente.";
} else {
    echo "Error: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
