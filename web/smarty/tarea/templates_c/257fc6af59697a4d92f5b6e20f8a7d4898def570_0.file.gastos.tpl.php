<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-30 16:47:53
  from '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/gastos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0a1c291d0fe8_70004970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '257fc6af59697a4d92f5b6e20f8a7d4898def570' => 
    array (
      0 => '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/gastos.tpl',
      1 => 1577534921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0a1c291d0fe8_70004970 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gastos</title>
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
            <form action='gastos.php' method='post'>
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
            <form action='gastos.php' method='post'>
                <fieldset>
                    <legend>Gastos</legend>
                    <label><p>Cantidad a gastar</p>
                    <!-- Campo para los ingresos -->
                    <input type="number" name="gasto" placeholder="Cantida a gastar" step="0.01" min="0.01" value="0.01"></label>
                    <div class='campo'>
                        <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                            <input type='submit' name='gastar' value='Gastar' disabled='true'/>
                        <?php } else { ?>
                            <input type='submit' name='gastar' value='Gastar'/>
                        <?php }?>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html><?php }
}
