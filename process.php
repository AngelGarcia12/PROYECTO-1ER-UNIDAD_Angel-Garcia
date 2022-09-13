<?php
if(!empty($_POST['USUARIO']) && !empty($_POST['CONTRASEÑA'])){
    $nickname = $_POST['USUARIO'];
    $password = $_POST['CONTRASEÑA'];
    if($nickname == "cliente" && $password == "123" ){
        header("location: cliente.php");
    }elseif ($nickname == "administrador" && $password == "asd") {
        header("location: admin.php");
    }else{
    header("Location: False.php");
    }
}else{
    header("Location: index.php");
}