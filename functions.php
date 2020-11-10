<?php
include 'admin/config.php';

function conec() {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=eshop', 'root', '');
        return $conexion;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function cleandatos($datos) {
    $datos = htmlspecialchars($datos);
    $datos = trim($datos);
    $datos = stripslashes($datos);

    return $datos;
}

function pagina_actual() {
    return isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
}

function traer_productos($shopconfig, $conexion) {
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $shopconfig - $shopconfig : 0;
    
    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productos LIMIT $inicio, $shopconfig");
    $statement->execute();

    $resultado = $statement->fetchAll();

    return $resultado;
}