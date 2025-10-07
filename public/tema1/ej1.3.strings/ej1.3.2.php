<!-- Ejercicio 2: Manipulación de cadenas con funciones
Descripción
Define la variable $frase con el valor "   PHP es un lenguaje muy potente   ". Luego, realiza 
    las siguientes operaciones utilizando las funciones de cadena apropiadas:
Elimina los espacios en blanco iniciales y finales de $frase.
Convierte la frase resultante a mayúsculas.
Extrae la subcadena "lenguaje" de la frase en mayúsculas.
Imprime la frase sin espacios (con id="fraseSinEspacios"), la frase en mayúsculas (con id="fraseMayusculas") 
    y la subcadena extraída (con id="subcadenaExtraida") dentro de elementos <p>.
Salida
PHP es un lenguaje muy potente
PHP ES UN LENGUAJE MUY POTENTE
LENGUAJE
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

        $frase = "   PHP es un lenguaje muy potente   ";
        $frase = trim($frase);
        echo "<p id='fraseSinEspacios'>" . ($frase) . "</p>\n";

        $frase = strtoupper($frase);
        echo "<p id='fraseMayusculas'>" . ($frase) . "</p>\n";

        echo "<p id='subcadenaExtraida'>" . substr($frase, 10, 8) . "</p>\n";

    ?>

</body>
</html>