<?php

session_start();

 $total=0;

    if(isset($_SESSION["carrito"])){
        foreach($_SESSION["carrito"] as $indice => $arreglo){
            echo "<hr>Producto: ". $indice . "<br>";
            $total += $arreglo["cant"] * $arreglo["precio"];
            foreach ((array) $arreglo as $key =>$value) {
                echo $key .": " . $value. "<br>";

                }
           
        }
        echo"<h2>Total a pagar: $ $total </h2>";
        echo '<a ><a href="cliente.php">Regresar</a></a> <br>
        <a href="carrito.php?vaciar=true">Vaciar carrito</a>';

    }else{
        //echo "<script>alert('el carrito esta vacio');</script>";
        ?>
        <a href="cliente.php">Regresar</a>
     
        <?php
}
if(isset($_REQUEST["vaciar"])){
    session_destroy();
    header("location:carrito.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="carri.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>