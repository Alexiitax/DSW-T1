<!-- Ejercicio 1. Declaración y Concatenación de Strings:
Descripción del problema
Crea un script PHP llamado ej1.3.1.php. Dentro de este script, declara dos variables: 
$producto con el valor "Libro de PHP" y $precio con el valor 25.99. 
Luego, crea una tercera variable, $mensajeProducto, que combine "El producto 
" con el nombre del producto, " tiene un precio de " con el precio, y " €.". 
Utiliza el operador de concatenación (.) para esta unión. 
Finalmente, imprime el contenido de $mensajeProducto dentro de un párrafo HTML, 
asignándole el atributo id="infoProducto".

Salida esperada
<p id="infoProducto">El producto Libro de PHP tiene un precio de 25.99 €.</p>

Pista
Recuerda que para imprimir contenido HTML desde PHP, puedes utilizar echo y encerrar 
la cadena HTML entre comillas simples o dobles, escapando las comillas internas si son del mismo tipo.
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

        $producto = "Libro de PHP";
        $precio = 25.99;

        $mensajeProducto = "El producto " . $producto . " tiene un precio de " . $precio . " €.";

        echo "<p id='infoProducto'>" . $mensajeProducto . "</p>"

    ?>

</body>
</html>