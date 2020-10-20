<?php

require_once('include/DB.php');
require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('./web/smarty/tarea/templates/');
$smarty->setCompileDir('./web/smarty/tarea/templates_c/');
$smarty->setConfigDir('./web/smarty/tarea/configs/');
$smarty->setCacheDir('./web/smarty/tarea/cache/');

session_start();
// Se asigna cadenas vacias a las variables para que no de fallo en el .tpl
$smarty->assign('usuario', '');
$smarty->assign('sesion', '');
$smarty->assign('ingresos', '');
$smarty->assign('gastos', '');
$smarty->assign('presupuesto', '');
$smarty->assign('error', '');
$smarty->assign('fondo', 'style = "background-color: grey;"');
$smarty->assign('codigoMov1', '');
$smarty->assign('codigoMov2', '');
$smarty->assign('codigoMov3', '');
$smarty->assign('codigoMov4', '');
$smarty->assign('codigoMov5', '');
$smarty->assign('codigoMov6', '');
$smarty->assign('codigoMov7', '');
$smarty->assign('codigoMov8', '');
$smarty->assign('codigoMov9', '');
$smarty->assign('codigoMov10', '');
$smarty->assign('mov1', 'S/M');
$smarty->assign('mov2', 'S/M');
$smarty->assign('mov3', 'S/M');
$smarty->assign('mov4', 'S/M');
$smarty->assign('mov5', 'S/M');
$smarty->assign('mov6', 'S/M');
$smarty->assign('mov7', 'S/M');
$smarty->assign('mov8', 'S/M');
$smarty->assign('mov9', 'S/M');
$smarty->assign('mov10', 'S/M');

// Si existe la cookie "fondo", se guarda el estilo en $fondo
if (isset($_COOKIE['fondo'])) {
    $smarty->assign('fondo', 'style = "background-color: ' . $_COOKIE['fondo'] . ';"');
}

if (isset($_POST['eliminar']) && !empty($_POST['movBorrar'])){
    DB::borrarMovimientos($_POST['movBorrar']);
}

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $ingresos = 0;
    $gastos = 0;
    $contador = 1;
    $movimientos = DB::obtenerMovimientos($usuario->getLogin());
    foreach ($movimientos as $movimiento) {
        if ($movimiento->getConcepto() == 'ingreso') {
            $ingresos += $movimiento->getCantidad();
            $smarty->assign('codigoMov'.$contador, $movimiento->getCodigoMov());
            $smarty->assign('mov'.$contador, $movimiento->getCantidad());
            $contador++;
        } else if ($movimiento->getConcepto() == 'gasto') {
            $gastos += $movimiento->getCantidad();
            $smarty->assign('codigoMov'.$contador, $movimiento->getCodigoMov());
            $smarty->assign('mov'.$contador, '-'.$movimiento->getCantidad());
            $contador++;
        }
    }
    $smarty->assign('ingresos', $ingresos);
    $smarty->assign('gastos', $gastos);
    $smarty->assign('usuario', $usuario->getLogin());
    $smarty->assign('presupuesto', $usuario->getPresupuesto());
    $smarty->assign('sesion', date('j-n-Y H:i:s', $_SESSION['visita']));
}

// Si no hay sesión iniciada, avisa
if (!isset($_SESSION['usuario'])) {
    $smarty->assign('error', 'No has iniciado sesión. Acceso restringido, solo puedes volver.');
}

// Si pulsa ultimoMvimientos, te manda a ultimosMovimientos
if (isset($_POST['ultimosMovimientos'])) {
    header("Location: ultimosMovimientos.php");
}

// Si pulsa ingresos, te manda a ingresos
if (isset($_POST['ingresos'])) {
    header("Location: ingresos.php");
}

// Si pulsas gastos, te manda a gastos
if (isset($_POST['gastos'])) {
    header("Location: gastos.php");
}

// Si pulsas eliminarMovimientos, te manda  a eliminarMovimientos
if (isset($_POST['eliminarMovimientos'])) {
    header("Location: eliminarMovimientos.php");
}

// Si pulsas preferencias, te manda a preferencias
if (isset($_POST['preferencias'])) {
    header("Location: preferencias.php");
}

// Si se pulsa volver, entra aquí
if (isset($_POST['volver'])) {
    // Si hay sesión iniciada, calcula el tiempo de sesion abierta
    if (isset($_SESSION['usuario'])) {
        $finSesion = mktime();
        $diferenciaTiempo = $_SESSION['visita'] - $finSesion;
        $minutosDiferencia = $diferenciaTiempo / (60);
        $minutosDiferenciaAbs = abs($minutosDiferencia);
        $minutosDiferenciaRound = round($minutosDiferenciaAbs);
        setcookie('tiempoSesion', $minutosDiferenciaRound, time() + 3600);
    }
    // Elimina la cookie de fondo, cierra sesión y te manda al index
    setcookie('fondo', false);
    session_unset();
    header("Location: index.php");
}

// Muestra el .tpl
$smarty->display('eliminarMovimientos.tpl');

