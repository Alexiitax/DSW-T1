<!-- Ejercicio 6: Visualización Detallada con var_dump()
Descripción del Problema: Crea un archivo PHP llamado ej1.1.6.php.
Declara una variable $producto con un string (ej. "Teclado Gaming").
Declara una variable $precio con un float (ej. 75.99).
Declara un array asociativo $configuracion con dos pares clave-valor (ej. ['tema' => 'oscuro', 'idioma' => 'es']).
Usa var_dump() para mostrar la información detallada de cada una de estas tres variables en un listado.
Salida Esperada (ejemplo):
string(14) "Teclado Gaming"
float(75.99)
array(2) {["tema"]=>string(6) "oscuro",  ["idioma"]=>string(2) "es"}
Pista: var_dump() es excelente para depuración ya que muestra el tipo, valor y, 
en el caso de strings y arrays, su longitud o número de elementos.
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
    $producto = "Teclado Gaming";
    $precio = 75.99;

    $configuracion = [
        'tema' => 'oscuro',
        'idioma' => 'es',
    ];

    var_dump($producto);
    var_dump($precio);
    var_dump($configuracion);
    ?>
</body>
</html>