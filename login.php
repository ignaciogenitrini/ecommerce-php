<?php
include 'functions.php';

$errores = "";
$mensaje = "";

$conect = conec();

if (!$conect) {
    die();
}

/*  VALIDANDO EL REGISTRO DEL USUARIO    */ 

if (isset($_POST['submit-register']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = cleandatos(strtolower($_POST['user']));

    $email = cleandatos($_POST['email']);

    $password = cleandatos($_POST['password']);
    $password2 = cleandatos($_POST['password2']);

    if (empty($user) || empty($email) || empty($password)) {
        $errores .= "Ingrese los datos correctamente!" . "</br>";
    } else {

        $statement = $conect->prepare("SELECT * FROM users WHERE user = :user AND email = :email");
        $statement->execute(array(
            ':user' => $user,
            ':email' => $email,
        ));

        $resultado = $statement->fetchAll();
        if ($resultado != false) {
            $errores .= "El usuario ya existe!" . "</br>";
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if ($password != $password2) {
            $errores .= "Las claves ingresadas no son iguales!" . "</br>";
        }



        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores .= "Ingresa un email valido!" . "</br>";
        } else {
            $email = (filter_var($email, FILTER_SANITIZE_EMAIL));
        }

        if ($errores == '') {
            $statement = $conect->prepare("INSERT INTO users (id, user, password, email) VALUES (null, :user, :password, :email)");
            $statement->execute(array(
                ':user' => $user,
                ':password' => $password,
                ':email' => $email,
            ));

            $mensaje .= "Cuenta registrada!";
        } 
    }
} 


/*  Validando logeo de usuario  */ 



include 'views/login.view.php';