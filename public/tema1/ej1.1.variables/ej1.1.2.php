<!-- Ejercicio 2: Variables y Concatenación
Descripción del Problema: Crea un archivo PHP llamado ej1.1.2.php. 
Declara una variable $bebida con el texto ron Arehucas  y una variable $edad con 18. Luego, imprime un mensaje en el navegador que diga: "Al profe le gusta el [bebida] con [edad] años en barrica."
Este texto se debe mostrar en un encabezado 2.
Salida Esperada (ejemplo, si $bebida="ron Arehucas", $edad=18):
Al profe le gusta el ron Arehucas con 18 años en barrica..
Pista: Puedes usar un echo y el texto entre comillas dobles con las variables dentro..
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

        $bebida = "ron Arehucas";
        $edad = 18;

        echo "<h2>Al profe le gusta el $bebida con $edad años en barrica</h2>";

    ?>
</body>
</html>