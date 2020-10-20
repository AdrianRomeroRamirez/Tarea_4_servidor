<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-30 16:48:19
  from '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/eliminarMovimientos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0a1c43169660_20749217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd1ff2645543c6a9e5c27a02ca0a2f0fccec01b7' => 
    array (
      0 => '/home/adrian/NetBeansProjects/tarea4/Romero_Ramirez_Adrian_DWES04_Tarea_E1/web/smarty/tarea/templates/eliminarMovimientos.tpl',
      1 => 1577707838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0a1c43169660_20749217 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Eliminar movimientos</title>
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
            <form action='eliminarMovimientos.php' method='post'>
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
            <form action='eliminarMovimientos.php' method='post'>
                <table>
                    <tr>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov1']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov1']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov2']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov2']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov3']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov3']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov4']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov4']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov5']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov5']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov6']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov6']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov7']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov7']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov8']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov8']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov9']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov9']->value;?>
</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='<?php echo $_smarty_tpl->tpl_vars['codigoMov10']->value;?>
'><p></p></input><?php echo $_smarty_tpl->tpl_vars['mov10']->value;?>
</label></td>
                    </tr>
                </table>
                <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                    <input type='submit' name='eliminar' value='Eliminar' disabled='true'/>
                <?php } else { ?>
                    <input type='submit' name='eliminar' value='Eliminar'/>
                <?php }?>
            </form>
        </div>
    </body>
</html><?php }
}
