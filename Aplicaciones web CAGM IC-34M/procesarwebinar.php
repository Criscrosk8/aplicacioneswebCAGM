<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Registro</title>
</head>
<body>
    <h1>Datos del Registro al Webinar</h1>
    
    <?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fuente = $_POST['fuente'];
    $tema = $_POST['tema'];
    $participacion = isset($_POST['participacion']) ? implode(", ", $_POST['participacion']) : "Ninguna";
    $comentarios_adicionales = $_POST['comentarios_adicionales'];

    // Mostrando los datos capturados
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Fuente de Información:</strong> $fuente</p>";
    echo "<p><strong>Tema de Interés:</strong> $tema</p>";
    echo "<p><strong>Opciones de Participación:</strong> $participacion</p>";
    echo "<p><strong>Comentarios Adicionales:</strong> $comentarios_adicionales</p>";
    ?>
</body>
</html>