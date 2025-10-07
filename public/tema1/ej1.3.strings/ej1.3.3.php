<!-- Ejercicio 3: Uso de strlen() y str_replace()
Descripción del problema
Define la variable $textoOriginal con el valor "El perro corre por el parque y el perro ladra."

Utiliza strlen() para obtener la longitud total de $textoOriginal y almacénala en $longitudTexto.
Utiliza str_replace() para reemplazar todas las ocurrencias de la palabra "perro" por "gato" en 
    $textoOriginal y almacena el resultado en $textoModificado.
Finalmente, imprime la longitud original del texto en un span con id="longitudOriginal" y 
    el texto modificado en un párrafo con id="textoReemplazado".

Salida esperada
<p>La longitud original del texto es: <span id="longitudOriginal">46</span></p>
<p id="textoReemplazado">El gato corre por el parque y el gato ladra.</p>
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

        $textoOriginal = "El perro corre por el parque y el perro ladra.";

        $longitudTexto = strlen($textoOriginal);
        $textoModificado = str_replace("perro", "gato", $textoOriginal);

        echo "<p>La longitud original del texto es: <span id='longitudOriginal'>" . $longitudTexto . "</span></p>\n";
        echo "<p id='textoReemplazado'>" . $textoModificado . "</p>";

    ?>

</body>
</html>