<!-- Ejercicio 2: Operadores de Incremento/Decremento y Precedencia
Descripción del Problema: 
Declara una variable $contador con el valor inicial de 5.
Incrementa $contador en 1 usando el operador de pre-incremento y almacena el resultado en $pre_incremento. Imprime ambos valores.
Reinicia $contador a 5.
Incrementa $contador en 1 usando el operador de post-incremento y almacena el resultado en $post_incremento. Imprime ambos valores.
Declara una variable $a con el valor 10 y una variable $b con el valor 3.
Realiza la siguiente operación: $resultado_precedencia = $a + $b * 2;. Imprime el valor de $resultado_precedencia.
Realiza la siguiente operación: $resultado_parentesis = ($a + $b) * 2;. Imprime el valor de $resultado_parentesis.
Salida Esperada:
Valor de $pre_incremento: 6, Valor de $contador: 6
Valor de $post_incremento: 5, Valor de $contador: 6
Resultado de la precedencia: 16
Resultado con paréntesis: 26
Pista: Observa cómo el momento del incremento afecta el valor de la variable en la asignación y cómo los paréntesis cambian el orden de las operaciones.
Aquí tienes tres ejercicios adicionales sobre operadores en PHP, siguiendo el formato y las especificaciones para pruebas con Playwright:
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
    
        $contador = 5;
        $pre_incremento = ++$contador;

        echo "Valor de \$pre_incremento: " . $pre_incremento . ", Valor de \$contador: " . $contador . "\n";

        $contador = 5;
        $post_incremento = $contador++;

        echo "Valor de \$post_incremento: " . $post_incremento . ", Valor de \$contador: " . $contador . "\n";

        $a = 10;
        $b = 3;

        $resultado_precedencia = $a + $b * 2;
        echo "Resultado de la precedencia: " . $resultado_precedencia . "\n";

        $resultado_parentesis = ($a + $b) * 2;
        echo "Resultado con paréntesis: " . $resultado_parentesis . "\n";
    
    ?>

</body>
</html>