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
$smarty->assign('fecha1', 'S/M');
$smarty->assign('cantidad1', 'S/M');
$smarty->assign('fecha2', 'S/M');
$smarty->assign('cantidad2', 'S/M');
$smarty->assign('fecha3', 'S/M');
$smarty->assign('cantidad3', 'S/M');
$smarty->assign('fecha4', 'S/M');
$smarty->assign('cantidad4', 'S/M');
$smarty->assign('fecha5', 'S/M');
$smarty->assign('cantidad5', 'S/M');
$smarty->assign('fecha6', 'S/M');
$smarty->assign('cantidad6', 'S/M');
$smarty->assign('fecha7', 'S/M');
$smarty->assign('cantidad7', 'S/M');
$smarty->assign('fecha8', 'S/M');
$smarty->assign('cantidad8', 'S/M');
$smarty->assign('fecha9', 'S/M');
$smarty->assign('cantidad9', 'S/M');
$smarty->assign('fecha10', 'S/M');
$smarty->assign('cantidad10', 'S/M');

// Si existe la cookie "fondo", se guarda el estilo en $fondo
if (isset($_COOKIE['fondo'])) {
    $smarty->assign('fondo', 'style = "background-color: ' . $_COOKIE['fondo'] . ';"');
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
            // Si el movimiento es de los 10 primeros, se guarda en la variable correspondiente
            if ($contador < 11) {
                $smarty->assign('fecha' . $contador, $movimiento->getFecha());
                $smarty->assign('cantidad' . $contador, $movimiento->getCantidad());
                $contador++;
            }
        } else if ($movimiento->getConcepto() == 'gasto') {
            $gastos += $movimiento->getCantidad();
            // Si el movimiento es de los 10 primeros, se guarda en la variable correspondiente
            if ($contador < 11) {
                $smarty->assign('fecha' . $contador, $movimiento->getFecha());
                $smarty->assign('cantidad' . $contador, '-' . $movimiento->getCantidad());
                $contador++;
            }
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
$smarty->display('ultimosMovimientos.tpl');
