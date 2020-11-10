<?php

include 'admin/config.php';
include 'functions.php';
include 'logicacarrito.php';

$con = conec();

if (!$con) {
    die();
    header('Location: index.php');
}



if ($_POST) {
    
    $total = 0;
    $sid = session_id();
    $email = $_POST['email'];

    foreach ($_SESSION['carrito'] as $indice => $producto) {
        $total = $total + ($producto['cantidad'] * $producto['precio']);
        $producto = $producto['nombre'];
    }

    $statement = $con->prepare("INSERT INTO `ventas` (`id`, `clavetransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `status`)
     VALUES (NULL, :clavetransaccion, '', NOW(), :email, :total, 'pendiente');");
    
    $statement->execute(array(
        ':clavetransaccion' => $sid,
        ':email' => $email,
        ':total' => $total,
    ));

    $idventa = $con->lastInsertId();

    // Inserccion a la tabla detalle de venta

    foreach ($_SESSION['carrito'] as $indice => $producto) {

       $statement = $con->prepare("INSERT INTO `detalleventas` (`id`, `idventa`, `idproductos`, `preciounitario`, `cantidad`) 
       VALUES (NULL, :idventa, :idproductos, :preciounitario, :cantidad);");

       $statement->execute(array(
        ':idventa' => $idventa,
        ':idproductos' => $producto['id'],
        ':preciounitario' => $producto['precio'],
        ':cantidad' => $producto['cantidad'],
       ));

    }
    
}    


include 'views/pay.view.php';