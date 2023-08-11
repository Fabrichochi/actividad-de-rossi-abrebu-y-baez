<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
</head>
<body>

<h2>Formulario de Contacto</h2>

<form method="post" action="conexion.php">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br><br>
    
    <label for="email">Correo Electrónico:</label><br>
    <input type="email" id="email" name="email"><br><br>
    
    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje"></textarea><br><br>
    
    <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>
