<!-- Ejercicio 5: Type Casting Explícito
Descripción del Problema: Crea un archivo PHP llamado ej1.1.5.php.
Declara una variable $valor_float con el valor 99.99.
Convierte $valor_float a un entero usando type casting y almacénalo en $valor_int. 
Imprime con var_dump su valor y tipo dentro de una división con id=”entero1”.
Declara una variable $valor_string_num con el valor "50".
Convierte $valor_string_num a un entero usando type casting y almacénalo en $valor_int_desde_string. 
Imprime con var_dump su valor y tipo dentro de una división con id=”entero2”.
Declara una variable $valor_cero con el valor 0.
Convierte $valor_cero a booleano usando type casting y almacénalo en $valor_bool_desde_cero. 
Imprime con var_dump su valor y tipo dentro de una división con id=”booleano”.
Salida Esperada:
	int(99)		<div id=”entero1”>int(99)</div>
	int(50)		<div id=”entero2”>int(50)</div>
	bool(false)	<div id=”booleano”>bool(false)</div>
Pista: Se debería imprimir la apertura del div antes del var_dump y luego imprimir el cierre de la división.
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
    $valor_float = 99.99;
    $valor_int = (int)$valor_float;

    echo "<div id='entero1'>";
    echo var_dump($valor_int);
    echo "</div>";

    $valor_string_num = "50";
    $valor_int_desde_string = (int)$valor_string_num;

    echo "<div id='entero2'>";
    echo var_dump($valor_int_desde_string);
    echo "</div>";


    $valor_cero = 0;
    $valor_bool = (bool)$valor_cero;
    echo "<div id='booleano'>";
    echo var_dump($valor_bool);
    echo "</div>";
    ?>
    </body>
</html>