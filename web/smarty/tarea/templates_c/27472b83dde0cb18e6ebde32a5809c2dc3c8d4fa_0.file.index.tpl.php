<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-30 11:33:58
  from '/home/adrian/NetBeansProjects/Tarea4/web/smarty/tarea/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e09d29656fcb4_81148687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27472b83dde0cb18e6ebde32a5809c2dc3c8d4fa' => 
    array (
      0 => '/home/adrian/NetBeansProjects/Tarea4/web/smarty/tarea/templates/index.tpl',
      1 => 1577702035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e09d29656fcb4_81148687 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body <?php echo $_smarty_tpl->tpl_vars['fondo']->value;?>
>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['tiempoSesion']->value;?>

        </div>
        <div id='login'>
            <form action='index.php' method='post'>
                <fieldset >
                    <legend>Login</legend>
                    <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
                    <div class='campo'>
                        <label for='usuario' >Usuario:</label><br/>
                        <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
                    </div>
                    <div class='campo'>
                        <label for='password' >Contraseña:</label><br/>
                        <input type='password' name='password' id='password' maxlength="50" /><br/>
                    </div>

                    <div class='campo'>
                        <input type='submit' name='enviar' value='Enviar' />
                    </div>
                    <div class='campo'>
                        <input type='submit' name='borrar' value='Borrar datos' />
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html><?php }
}
