<!-- Ejercicio 3: Operadores de Asignación Combinados:
Descripción del Problema: Crea ej1.2.3.php donde inicialices una variable 
$numero con el valor 10. Luego, realiza las siguientes operaciones utilizando operadores de asignación combinados:
Suma 5 a $numero.
Multiplica $numero por 2.
Resta 3 a $numero.
Divide $numero por 4.
Para cada operación, imprime el valor final de $numero dentro de un párrafo HTML con la clase class="resultado".
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

        $numero = 10;

        $numero += 5;
        echo '<p class="resultado">' . $numero . '</p>' . "\n";

        $numero = $numero * 2;
        echo '<p class="resultado">' . $numero . '</p>' . "\n";

        $numero = $numero - 3;
        echo '<p class="resultado">' . $numero . '</p>' . "\n";

        $numero = $numero / 4;
        echo '<p class="resultado">' . $numero . '</p>' . "\n";

    ?>

</body>
</html>