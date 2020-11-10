<?php

include 'admin/config.php';
include 'functions.php';
include 'logicacarrito.php';

$conec = conec();

if (!$conec) {
    echo "No se puede conectar";
}


$productos = traer_productos(9, $conec);

if (!$productos) {
    echo "No hay productos almacenados!";
}

include 'views/shop.view.php';
