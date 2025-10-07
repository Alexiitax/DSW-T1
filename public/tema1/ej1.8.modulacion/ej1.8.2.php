
    <?php include "cabecera.php"; ?>

    <?php
    require "datos_array.php";
    require "tablaUtils.php";

    echo generarTabla($datos);
    ?>
    
    <?php include "pie_pagina.php"; ?>
