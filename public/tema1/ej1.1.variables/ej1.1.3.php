<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Debemos definir una constante usando const y otra usando define()

        const VERSION_PHP = 8.4;
        define('IS_TEST_MODE_ACTIVE', false); 

        /* 
        
        En el caso del método define(), est epermite definir constantes en
        cualquier momento del script, incluido dentro de condiciones o funciones.
        Sin embargo, en el caso del método const, este define las constantes
        en tiempo de compilación, es decir que deben ser al incio del script,
        estas no se pueden definir dentro de condiciones, funciones ni bucles.
        
        */
    ?>
        <p><?php echo "Versión de PHP: " . VERSION_PHP; ?></p>
        <p><?php echo "Test mode: " . IS_TEST_MODE_ACTIVE; ?></p>
    
</body>
</html>