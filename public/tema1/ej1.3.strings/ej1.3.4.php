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