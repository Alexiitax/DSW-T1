<!-- Ejercicio 1: Coerción de Tipos y Operaciones Aritméticas
Descripción del Problema: Crea un archivo PHP llamado ej1.2.1.php.
Declara una variable $numero_string con el valor "100" (como cadena).
Declara una variable $numero_entero con el valor 25 (como entero).
Realiza una suma de $numero_string y $numero_entero y almacena el resultado en $resultado_suma.
Imprime el valor de $resultado_suma y su tipo de dato.
Realiza una concatenación de $numero_string y $numero_entero usando el operador . y almacena el resultado en $resultado_concat.
Imprime el valor de $resultado_concat y su tipo de dato.
Salida Esperada:
Resultado de la suma: 125, Tipo: integer
Resultado de la concatenación: 10025, Tipo: string
Pista: Observa cómo PHP convierte los tipos automáticamente en diferentes contextos
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
    
        $numero_string = "100";
        $numero_entero = 25;

        $resultado_suma = $numero_string + $numero_entero;
        echo "Resultado de la suma: " . $resultado_suma . ", Tipo: " . gettype($resultado_suma) . "\n";

        $resultado_concat = $numero_string . $numero_entero;
        echo "Resultado de la concatenación: " . $resultado_concat . ", Tipo: " . gettype($resultado_concat) . "\n";
    
    ?>

</body>
</html>