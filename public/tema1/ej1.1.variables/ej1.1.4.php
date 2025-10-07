<!-- Ejercicio 4: Tipos de Datos y gettype()
Descripción del Problema: Crea un archivo PHP llamado ej1.1.4.php.
Declara una variable $entero y asigna un número entero (ej. 10).
Declara una variable $flotante y asigna un número decimal (ej. 10.5).
Declara una variable $cadena y asigna un texto (ej. "PHP").
Declara una variable $booleano y asigna true.
Para cada variable, imprime su valor y su tipo de dato, usando gettype(). 
Cada variable y su tipo deben estar en una línea de un listado no ordenado.
Salida Esperada:
Valor: 10, Tipo: integer
Valor: 10.5, Tipo: double
Valor: PHP, Tipo: string
Valor: 1, Tipo: boolean
Pista: gettype() devuelve el tipo como una cadena de texto. 
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

        $entero = 10;
        $flotante = 10.5;
        $cadena = 'PHP';
        $booleano = true;

        echo "<ul>";
        echo "<li>Valor: $entero, Tipo: " . gettype($entero) . "</li>";
        echo "<li>Valor: $flotante, Tipo: " . gettype($flotante) . "</li>";
        echo "<li>Valor: $cadena, Tipo: " . gettype($cadena) . "</li>";
        echo "<li>Valor: $booleano, Tipo: " . gettype($booleano) . "</li>";
        echo "</ul>";

    ?>
</body>
</html>