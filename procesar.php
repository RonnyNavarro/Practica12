<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 12- Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$nombreAlumno = $_POST['nombre'];
$apellidosAlumno = $_POST['apellidos'];
echo 'TU NOMBRE ES: '.$nombreAlumno.' '.$apellidosAlumno;

?>
</body>
</html>