<?php
include 'admin/config.php';
include 'functions.php';
include 'logicacarrito.php';

$conec = conec();

if (!$conec) {
    echo "No se puede conectar";
}

$productos = traer_productos($blog_config['post_porpag'], $conec);

if (!$productos) {
    echo "No hay productos almacenados!";
}

include 'views/index.view.php';