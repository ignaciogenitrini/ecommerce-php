<?php

include 'admin/config.php';
include 'functions.php';

$conecc = conec();

// print_r($_GET); reciviendo lo que llega por get del archivo pay.view.php

$clientid = 'AYfoprjnQLXvTQ28fVk9_WnmAfo4pjVbDI25zhf_MWwxZq5AczZ4wYAI6T-rYPLq_LVtbouWWu8mdghm'; // client id para ingresar a la api de paypal
$secretid = 'ECHavlCDbwnH9v0KiZS12X6K1BOZ_ViNbv8XYIxUCON9z1lxLVOt3qIrGaS53iQdxyyPFaVyTmZNTKGw'; // secret id para ingresar a la api de paypal

$login = curl_init('https://api-m.sandbox.paypal.com/v1/oauth2/token'); // inicializando el login al servidor

curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE); // activando la respuesta del servidor 

curl_setopt($login, CURLOPT_USERPWD, $clientid . ':' . $secretid); // incializando el usuario y contraseña de ingreso al servidor

curl_setopt($login, CURLOPT_POSTFIELDS, "grant_type=client_credentials"); // enviando la consulta por post

$respuesta = curl_exec($login); // ejecutando la consulta a la api

// print_r($respuesta); // mostrando la respuesta del servidor de paypal, si falla la consulta no se realizo

$objetorespuesta = json_decode($respuesta); // desencriptando la respuesta json del servidor
 
$accestoken = $objetorespuesta->access_token; // guardando en la variable el acces token para realizar consultas a la api de paypal
 
// echo $accestoken; // imprimiendo el acces token    

$venta = curl_init("https://api.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']); 
// inicializando la peticion a la api de paypal para conseguir los datos del pago

curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$accestoken));
// declarando valores del header, datos en json, validacion mediante token

curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);
// guardando la informacion del pago en la variable que contenga el exec de la peticion

$responseventa = curl_exec($venta);
// variable que contiene el exec de la peticion

//print_r($responseventa);

$objdatostransaccion = json_decode($responseventa); 

// print_r($objdatostransaccion);

// Guardando en variables los datos de transaccion

$state = $objdatostransaccion->state; // estado del pago
$email = $objdatostransaccion->payer->payer_info->email; // email del comprador

$total = $objdatostransaccion->transactions[0]->amount->total; // total de la compra
$currency = $objdatostransaccion->transactions[0]->amount->currency; // moneda de cambio

$custom = $objdatostransaccion->transactions[0]->custom; // VALOR IMPORTANTE guarda el sid y el id de venta encriptado 

$claveventa = explode("#", $custom);

$sid = $claveventa[0];
$idventa = openssl_decrypt($claveventa[1], COD, KEY);

curl_close($venta);
curl_close($login);

if ($state == 'approved') {
    $mensajepago = "<h3>Pago aceptado correctamente!<h3>";

    $statement = $conecc->prepare("UPDATE `ventas` SET `paypaldatos` = :paypaldatos, `status` = :estado WHERE `ventas`.`id` = :id;");
    $statement->execute(array(
        ':paypaldatos' => $responseventa,
        ':estado' => 'aprobado',
        ':id' => $idventa,
    ));

    $statement = $conecc->prepare('UPDATE `ventas` SET `status` = :estado WHERE clavetransaccion = :clavetransaccion AND total = :total AND id = :id;');
    $statement->execute(array(
        ':estado' => 'completado',
        ':clavetransaccion' => $sid,
        ':total' => $total,
        ':id' => $idventa,
    ));

} else {
    $mensajepago = "<h3>Pago denegado !</h3>";
}


include 'views/verificador.view.php';

