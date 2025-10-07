<!-- Ejercicio 4. Formateo de cadenas con printf() y sprintf()
Descripción del problema
Considera un producto con $item = "Teclado Mecánico", un $costo = 75.99 y un $descuento = 0.15.
Utiliza printf() para mostrar un mensaje que indique el nombre del producto y su precio final con 
dos decimales después de aplicar el descuento. El mensaje debe estar dentro de un párrafo HTML con id="mensajeProducto".
Utiliza sprintf() para crear una cadena que diga "El descuento aplicado es del 15%." y almacénala 
en la variable $mensajeDescuento. Luego, imprime $mensajeDescuento dentro de un <div> con id="textoDescuento".
Salida:
El producto Teclado Mecánico tiene un precio final de 64.59 euros.
El descuento aplicado es del 15%.
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
    
        $item = "Teclado Mecánico";
        $costo = 75.99;
        $descuento = 0.15;

        echo "<p id='mensajeProducto'>";
        printf("El producto %s tiene un precio final de %.2f euros.",
        $item, ($costo - ($costo * $descuento)));
        echo "</p>";

        $mensajeDescuento = sprintf("El descuento aplicado es del %d%%.", ($descuento * 100));
        echo "<div id='textoDescuento'>$mensajeDescuento</div>";

    ?>

</body>
</html>