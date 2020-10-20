<?php

require_once('include/DB.php');
require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('./web/smarty/tarea/templates/');
$smarty->setCompileDir('./web/smarty/tarea/templates_c/');
$smarty->setConfigDir('./web/smarty/tarea/configs/');
$smarty->setCacheDir('./web/smarty/tarea/cache/');

// Se asigna cadenas vacias a las variables para que no de fallo en el .tpl
$smarty->assign('error', '');
$smarty->assign('tiempoSesion', '');
$smarty->assign('fondo', 'style = "background-color: grey;"');

// Si existe la cookie "fondo", se guarda el estilo en $fondo
if (isset($_COOKIE['fondo'])) {
    $smarty->assign('fondo', 'style = "background-color: ' . $_COOKIE['fondo'] . ';"');
}

// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {

    if (empty($_POST['usuario']) || empty($_POST['password'])) {
        $smarty->assign('error', 'Debes introducir un nombre de usuario y una contraseña');
    } else {
        // Comprobamos las credenciales con la base de datos
        if (DB::verificaUsuario($_POST['usuario'], $_POST['password'])) {
            session_start();
            $usuario = DB::obtenerUsuario($_POST['usuario']);
            $_SESSION['usuario'] = $usuario;
            $_SESSION['visita'] = mktime();
            header("Location: conta.php");
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
            $smarty->assign('error', 'Usuario o contraseña no válidos!');
        }
    }
}

if (isset($_POST['borrar'])){
    DB::borrarDatosAnteriores();
}

if (isset ($_COOKIE['tiempoSesion'])){
    $smarty->assign('tiempoSesion', 'El tiempo de sesión ha sido: ' . $_COOKIE['tiempoSesion'] . ' minutos.');
    setcookie('tiempoSesion', false);
}

$smarty->display('login.tpl');
