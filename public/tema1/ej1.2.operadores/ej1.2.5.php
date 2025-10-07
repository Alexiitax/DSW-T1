<!-- Ejercicio 5: Operadores de Incremento/Decremento y Operador Ternario:
Descripción del problema: 
Inicializa una variable $contador con el valor 5.
Aplica un pre-incremento a $contador y asigna el resultado a $a.
Reinicia $contador a 5.
Aplica un post-incremento a $contador y asigna el resultado a $b.
Utiliza el operador ternario para determinar si $a es mayor que $b. Si es así, la cadena resultante debe ser 
    "A es mayor"; de lo contrario, "B es mayor o igual".
Imprime los valores de $a, $b y el resultado del operador ternario dentro de elementos <div> con los ids valorA, 
    valorB y resultadoTernario respectivamente.
Salida esperada:
6
5
A es mayor
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
        $a = ++$contador;
        $contador = 5;
        $b = $contador++;

        echo "<div id='valorA'>" . $a . "</div>\n";
        echo "<div id='valorB'>" . $b . "</div>\n";
        echo "<div id='resultadoTernario'>" . ($a > $b ? "A es mayor" : "B es mayor o igual") . "</div>\n";

    ?>

</body>
</html>