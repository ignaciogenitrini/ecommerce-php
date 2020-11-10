<?php
session_start();
include 'admin/config.php';

$errores = "";
$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {

        case 'Agregar':

            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $id = openssl_decrypt($_POST['id'], COD, KEY);
            } else {
                $errores .= "Error id";
            }

            if(is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $nombre = openssl_decrypt($_POST['nombre'], COD, KEY);
                $mensaje .= "Producto agregado al carrito!";
            } else {
                $errores .= "Error nombre";
            }

            if(is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $precio = openssl_decrypt($_POST['precio'], COD ,KEY);
            } else {
                $errores .= "Error precio";
            }

            if (is_numeric($_POST['cantidad'])) {
                $cantidad = $_POST['cantidad'];
            } else {
                $cantidad = 1;
            }

            /*  Creando arrays con productos enviados desde el index/shop  */ 

            if (!isset($_SESSION['carrito'])) {

                $producto = [
                    'id' => $id,
                    'nombre' => $nombre,
                    'precio' => $precio,
                    'cantidad' => $cantidad
                ];

                $_SESSION['carrito'][0] = $producto;

            } else {

                // variable que guarda todos los arrays de carrito 
                $idproductos = array_column($_SESSION['carrito'], 'id');

                // si el id que llega desde el formulario del producto coincide con un id dentro de la sesion carrito entonces

                if (in_array($id, $idproductos)) {
                    echo "<script>alert('El producto ya fue seleccionado!');</script>";
                } else {
                    // Sino que agregue el producto 
                    $cantidadproductos = count($_SESSION['carrito']);

                    $producto = [
                    'id' => $id,
                    'nombre' => $nombre,
                    'precio' => $precio,
                    'cantidad' => $cantidad
                ];

                    $_SESSION['carrito'][$cantidadproductos] = $producto;
                }
            }
            
        break;

        case 'Eliminar':

            if(is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $id = openssl_decrypt($_POST['id'], COD, KEY);

                // Si el id que llega desde el form  cart coincide con un id del foreach entonces se elimina dicho indice
                foreach ($_SESSION['carrito'] as $indice => $producto) {
                    if ($id == $producto['id']) {
                        unset($_SESSION['carrito'][$indice]);
                    }
                }

            }

            
            break;


    } 
}