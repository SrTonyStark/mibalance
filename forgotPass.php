<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include ('misFunciones.php');

function limpiaPalabra($palabra) {
//filtro muy básico para evitar la inyección SQL -> 'OR'1'='1
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();
$cajaPassword = $_POST['cajaPassword'];
$cajaCorreo = $_POST['cajaCorreo'];
$passwordEncriptada = password_hash($cajaPassword, PASSWORD_BCRYPT);            //Encripto la contraseña

$resultadoQuery = $mysqli->query("UPDATE usuarios SET userPass = '$passwordEncriptada' WHERE correo = '$cajaCorreo'");                                    //El update de datos de registro

echo 'Contraseña actualizada';
?> 

<script>
//    $('#accedeForgot').click(function () {
//        $('#principal').load('forgotPasswordDesign.php');
//    });
</script>
