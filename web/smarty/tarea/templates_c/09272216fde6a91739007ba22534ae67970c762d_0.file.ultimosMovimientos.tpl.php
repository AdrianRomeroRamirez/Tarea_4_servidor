<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-30 16:48:11
  from '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/ultimosMovimientos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0a1c3b48a975_32742080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09272216fde6a91739007ba22534ae67970c762d' => 
    array (
      0 => '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/ultimosMovimientos.tpl',
      1 => 1577702035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0a1c3b48a975_32742080 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ultimos Movimientos</title>
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
            <form action='ultimosMovimientos.php' method='post'>
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
        <div id="tablaMovimientos">
            <table border="1">
                <caption>Ultimos 10 movimientos</caption>

                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha1']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad1']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha2']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad2']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha3']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad3']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha4']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad4']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha5']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad5']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha6']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad6']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha7']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad7']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha8']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad8']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha9']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad9']->value;?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['fecha10']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cantidad10']->value;?>
</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="2">S/M = Sin movimiento</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html><?php }
}
