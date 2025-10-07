<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['nombre']) && !empty($_GET['nombre'])){
        $nombre = $_GET['nombre'];

    }else{
        $nombre = "Invitado";
    }

    echo "<h1>Hola, " . htmlspecialchars($nombre) . ".";

    ?>
</body>
</html>