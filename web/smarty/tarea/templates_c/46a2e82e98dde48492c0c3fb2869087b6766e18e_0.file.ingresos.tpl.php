<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-30 16:47:44
  from '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/ingresos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0a1c20047b79_60503352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a2e82e98dde48492c0c3fb2869087b6766e18e' => 
    array (
      0 => '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/ingresos.tpl',
      1 => 1577702035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0a1c20047b79_60503352 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ingresos</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body <?php echo $_smarty_tpl->tpl_vars['fondo']->value;?>
>
        <div id='bienvenida'>
            <p>Bienvenido <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 || Fecha de inicio de sesión: <?php echo $_smarty_tpl->tpl_vars['sesion']->value;?>
 </br>
                Total ingresos año actual: <?php echo $_smarty_tpl->tpl_vars['ingresos']->value;?>
€ || Total gastos año actual: <?php echo $_smarty_tpl->tpl_vars['gastos']->value;?>
€</br> 
                Presupuesto año actual:
                <?php if ($_smarty_tpl->tpl_vars['presupuesto']->value > $_smarty_tpl->tpl_vars['gastos']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['presupuesto']->value;?>
€ 
                <?php } else { ?>
                    <font color = "red"><?php echo $_smarty_tpl->tpl_vars['presupuesto']->value;?>
€</font> 
                <?php }?> 
            </p>
        </div>
        <div id='menuHorizontal'>
            <form action='ingresos.php' method='post'>
                <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
                <table>
                    <tr>
                        <td>
                            <div class='campo'>
                                <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                    <input type='submit' name='ultimosMovimientos' value='Ultimos movimientos' disabled='true'/>
                                <?php } else { ?>
                                    <input type='submit' name='ultimosMovimientos' value='Ultimos movimientos'/>
                                <?php }?>
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                    <input type='submit' name='ingresos' value='Ingresos' disabled='true'/>
                                <?php } else { ?>
                                    <input type='submit' name='ingresos' value='Ingresos'/>
                                <?php }?>
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                    <input type='submit' name='gastos' value='Gastos' disabled='true'/>
                                <?php } else { ?>
                                    <input type='submit' name='gastos' value='Gastos'/>
                                <?php }?>
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                    <input type='submit' name='eliminarMovimientos' value='Eliminar movimientos' disabled='true'/>
                                <?php } else { ?>
                                    <input type='submit' name='eliminarMovimientos' value='Eliminar movimientos'/>
                                <?php }?>
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                    <input type='submit' name='preferencias' value='Preferencias' disabled='true'/>
                                <?php } else { ?>
                                    <input type='submit' name='preferencias' value='Preferencias'/>
                                <?php }?>
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                <input type='submit' name='volver' value='Salir' />
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="login">
            <form action='ingresos.php' method='post'>
                <fieldset>
                    <legend>Ingresos</legend>
                    <label><p>Cantidad a ingresar</p>
                    <!-- Campo para los ingresos -->
                    <input type="number" name="ingreso" placeholder="Cantida a ingresar" step="0.01" min="0.01" value="0.01"></label>
                    <div class='campo'>
                        <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                            <input type='submit' name='ingresar' value='Ingresar' disabled='true'/>
                        <?php } else { ?>
                            <input type='submit' name='ingresar' value='Ingresar'/>
                        <?php }?>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html><?php }
}
