<!-- Ejercicio 4: Operadores de Comparación Estricta y Lógicos:
Descripción del problema: Define dos variables: $valorA = "10" (string) y $valorB = 10 (integer). 
Utiliza operadores de comparación estricta (=== y !==) y operadores lógicos (&& y ||) para evaluar las siguientes condiciones:
¿$valorA es estrictamente igual a $valorB?
¿$valorA es estrictamente diferente de $valorB?
¿$valorA es igual a $valorB Y $valorA es un string?
¿$valorA es un integer O $valorB es un string?
Imprime el resultado de cada evaluación (true o false) dentro de un <span> con los ids comparacionEstrictaIgual, 
    comparacionEstrictaDiferente, logicoAnd y logicoOr respectivamente.
Salida esperada:
	Comparación estricta igual: false
Comparación estricta diferente: true
valorA es igual a valorB y valorA es un string: true
valor A es un entero o valorB es un string: false
Pista: Puedes usar el operador ternario para indicar como texto true o false dada una comparación.
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
    
        $valorA = "10";
        $valorB = 10;

        echo "Comparación estricta igual: <span id='comparacionEstrictaIgual'>" . ($valorA === $valorB ? "true" : "false") . "</span>";
        echo "Comparación estricta diferente: <span id='comparacionEstrictaDiferente'>" . ($valorA !== $valorB ? "true" : "false") . "</span>";
        echo "ValorA es igual a ValorB y valorA es un string: <span id='logicoAnd'>" . (($valorA == $valorB && gettype($valorA) == "string") ? "true" : "false") . "</span>";
        echo "ValorA es un entero o valorB es un string: <span id='logicoOr'>" . ((gettype($valorA) == "integer") || (gettype($valorB) == "string") ? "true" : "false") . "</span>";


    ?>

</body>
</html>