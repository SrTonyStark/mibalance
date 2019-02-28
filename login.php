<?php

//Inicia la sesión del navegador en el servidor PHP o 
//la continúa si ya estuviera iniciada.
//Comprueba si la sesión está empezada.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'funciones.php';

function limpiarPalabra($palabra) {
    //filtro muy básico para evitar la inyección SQL -> 'OR'1'='1
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "´");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();

$cajaNombre = limpiarPalabra($_POST['cajaNombre']);

$cajaPassword = limpiarPalabra($_POST['cajaPassword']);
//echo 'Has escrito el usuario '.$cajaNombre.' y la contraseña '.$cajaPassword;

$resultadoQuery = $mysqli->query("SELECT * FROM `usuarios` "
        . "WHERE `email` = '$cajaNombre' AND `pass` = '$cajaPassword'");

$numUsuarios = $resultadoQuery->num_rows;

//la query cambia, ahora solo se comprueba si está el usuario. El usuario ahora tendrá que ser unique
//para que no salgan 2 resultados. Dentro del if de usuarios hago la comprobacion de si el hash
//de la base de datos vale con $cajaPassword ya nos da acceso a app.php


if ($numUsuarios > 0) {
    $r = $resultadoQuery->fetch_array();
    //en la variable de sesión "nombreUsuario" guardo el nombre de usuario
    
    if ($cajaPassword == $r['pass']) {
        $_SESSION['nombreUsuario'] = $cajaNombre;
        //en la variable de sesión idUsuario guardo el id de usuario leído de la BBDD
        $_SESSION['idUsuario'] = $r['email'];
        //muestro la pantalla de las aplcación
        require 'index.php';
    } else {
       require 'error.php';
    }
} else {
    require 'error.php';
}