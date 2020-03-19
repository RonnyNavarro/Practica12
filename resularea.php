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
$radio = $_POST['radio'];
$result=pow($radio,2)*3.1416;
echo '<p>El área del círculo es:</p><h1>'.$result;
?>

</body>
</html>