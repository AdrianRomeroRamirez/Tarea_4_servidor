<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-30 13:26:39
  from '/home/adrian/NetBeansProjects/Tarea4/web/smarty/tarea/templates/preferencias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e09ecff91e987_53324817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82d7eb72a37a14ae0b86ee72a681641e3aa264d' => 
    array (
      0 => '/home/adrian/NetBeansProjects/Tarea4/web/smarty/tarea/templates/preferencias.tpl',
      1 => 1577708798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e09ecff91e987_53324817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Preferencias</title>
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
            <form action='preferencias.php' method='post'>
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
        <div>
            <form action='preferencias.php' method='post'>
                <h2>Elige el color de fondo de las paginas.</h2>
                <div id="colores">
                    <label>
                        <input type='radio' name='color' value='aquamarine'/><p style="color: aquamarine">Agua marina</p>
                    </label>
                    <br/>
                    <label>
                        <input type='radio' name='color' value='blue'/><p style="color: blue">Azul</p>
                    </label>
                    <br/>
                    <label>
                        <input type='radio' name='color' value='violet'/><p style="color: violet">Violeta</p>
                    </label>
                    <br/>
                    <label>
                        <input type='radio' name='color' value='chocolate'/><p style="color: chocolate">Chocolate</p>
                    </label>
                    <br/>
                    <label>
                        <input type='radio' name='color' value='green'/><p style="color: green">Verde</p>
                    </label>
                    <br/><br/>
                    <?php if (empty($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                        <input type='submit' name='enviar' value='Enviar' disabled='true'/>
                    <?php } else { ?>
                        <input type='submit' name='enviar' value='Enviar'/>
                    <?php }?>
                    <br/>
                    <input type='submit' name='restablecer' value='Restablecer preferencias'/>
                </div>
            </form>
        </div>
    </div>
</body>
</html><?php }
}
