<!DOCTYPE html>
<html lang="es">
<head>
 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Datos Procesados</title>

</head>
<body>

<h1>Registro Procesados</h1>


<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$fuente = $_POST['fuente'];
$temas_interes = isset($_POST['temas_interes']) ? implode(", ", $_POST['temas_interes']) : "No seleccionó ningún tema";
$opciones = isset($_POST['opciones'])? implode(', ',$_POST['opciones']): "No se selecciona ninguna opcion";
$comentarios = $_POST['comentarios'];

echo "<p><strong>Nombre Completo:</strong> $nombre</p>";
echo "<p><strong>Correo Electronico:</strong> $correo</p>";
echo "<p><strong>telefono:</strong> $telefono</p>";
echo "<p><strong>¿Como te entraste del webinar?:</strong> $fuente</p>";
echo "<p><strong>Temas de Interes:</strong> $temas_interes</p>";
echo "<p><strong>Opciones de Participacion:</strong> $opciones</p>";
echo "<p><strong>Comentarios o Preguntas:</strong> $comentarios</p>";
?>

</body>    
</html>