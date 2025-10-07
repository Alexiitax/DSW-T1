<!-- Ejercicio 3: Constantes y Comentarios
Descripción del Problema: Crea un archivo PHP llamado ej1.1.3.php.
Define una constante llamada VERSION_PHP con el valor "8.4" usando const.
Define otra constante booleana llamada IS_TEST_MODE_ACTIVE con valor false  v  usando define().
Añade un comentario de una sola línea al principio del script indicando el propósito del archivo.
Añade un comentario de varias líneas explicando la diferencia entre const y define().
Finalmente, imprime ambas constantes en el navegador, cada una en una línea nueva dentro de un párrafo.
Salida Esperada:
Versión de PHP: 8.4
Test mode: 
Pistas: 
Puedes usar la etiqueta <p> para los párrafos. 
Las constantes no se pueden insertar directamente dentro de una cadena con doble comillas. Tendrás que cortar el texto y unirlo con concatenación (.). También es posible usar el multiparametro que permite echo.
Al mostrar directamente un booleano en pantalla se muestra con un “1“ para true y nada para false. 
 -->

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