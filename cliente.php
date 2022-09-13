<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  <title>Prueba</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <!-- enlaces -->

    <ul class="navbar-nav">

      <li class="nav-item">
        <a href="carrito.php" class="nav-link" href="#">Carrito
        <img
                    src="https://cdn-icons-png.flaticon.com/512/5465/5465858.png"
                    width="20px"
                    > 
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php" class="nav-link" href="#">Salir

        <img
                    src="https://cdn-icons-png.flaticon.com/512/6276/6276642.png"
                    width="20px"
                    > 
        </a>
    
        
      </li>       
    </ul>
  </nav>



    <!-- enlaces -->

    <div class="container">
        <br>
     
    

        <div class="row">
       
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://www.farioma.com/wp-content/uploads/2021/02/lucky.jpg"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>Paco Rabanne One Million Lucky</span>
                        <h5>$1950</h5> 
                        <p>  Eau de toilette 200ml</p> 
                            <input type="hidden" name="title" value="Paco Rabanne One Million Lucky">
                            <input type="hidden" name="price" value="1950">
                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar 
                            <img
                    src="https://cdn-icons-png.flaticon.com/512/3405/3405668.png"
                    width="20px"
                    > 
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://a.cdnsbn.com/images/products/23525331005.jpg"> 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>Stronger With You Giorgio Armani</span>
                        <h5>$2500</h5> 
                        <p> Colonia 100ml</p> 
                            <input type="hidden" name="title" value="Stronger With You Giorgio Armani">
                            <input type="hidden" name="price" value="2500">
                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar 
                            <img
                    src="https://cdn-icons-png.flaticon.com/512/3405/3405668.png"
                    width="20px"
                    > 
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://http2.mlstatic.com/D_NQ_NP_790721-MLV48213052427_112021-W.jpg"
                    width="250px"
                    height="250px"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>Carolina Herrera 212 Vip Black</span>
                        <h5>$1600</h5> 
                        <p> Eau de toilette 100ml</p> 
                            <input type="hidden" name="title" value="Carolina Herrera 212 Vip Black">
                            <input type="hidden" name="price" value="1600">
                            <button class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar 
                            <img
                    src="https://cdn-icons-png.flaticon.com/512/3405/3405668.png"
                    width="20px"
                    > 
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
        </div>
        
    </div>
    <?php
    if(isset($_REQUEST["btnAccion"])){
        $producto = $_REQUEST["title"];
        $cantidad = $_REQUEST["cant"];
        $precio = $_REQUEST["price"];

       

        
        $_SESSION["carrito"][$producto]["cant"] = $cantidad;
        $_SESSION["carrito"][$producto]["precio"] = $precio;

        echo "<script>alert('$producto agregado al carrito');</script>";
    }
    ?>

</body>
</html>