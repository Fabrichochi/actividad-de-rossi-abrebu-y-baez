<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Aber - Presupuestos y Opiniones</title>
</head>
<body>
    <h1>Empresa Aber - Presupuestos</h1>
    <p>Complete el siguiente formulario para solicitar un presupuesto sin cargos:</p>

    <form method="post" action="conexioon.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br>
        
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" required></textarea><br>
        
        <!-- Agregar un campo oculto para enviar el cliente -->
        <input type="hidden" id="cliente" name="cliente" value="1">
        
        <button type="submit">Enviar Presupuesto</button>
    </form>
    
    <h2>Opiniones de Clientes</h2>
</body>
</html>
