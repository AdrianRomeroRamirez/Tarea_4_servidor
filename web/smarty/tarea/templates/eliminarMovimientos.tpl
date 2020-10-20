{* Smarty *}

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Eliminar movimientos</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body {$fondo}>
        <div id='bienvenida'>
            <p>Bienvenido {$usuario} || Fecha de inicio de sesión: {$sesion} </br>
                Total ingresos año actual: {$ingresos}€ || Total gastos año actual: {$gastos}€</br> 
                Presupuesto año actual:
                {if $presupuesto > $gastos}
                    {$presupuesto}€ 
                {else}
                    <font color = "red">{$presupuesto}€</font> 
                {/if} 
            </p>
        </div>
        <div id='menuHorizontal'>
            <form action='eliminarMovimientos.php' method='post'>
                <div><span class='error'>{$error}</span></div>
                <table>
                    <tr>
                        <td>
                            <div class='campo'>
                                {if empty($usuario)}
                                    <input type='submit' name='ultimosMovimientos' value='Ultimos movimientos' disabled='true'/>
                                {else}
                                    <input type='submit' name='ultimosMovimientos' value='Ultimos movimientos'/>
                                {/if}
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                {if empty($usuario)}
                                    <input type='submit' name='ingresos' value='Ingresos' disabled='true'/>
                                {else}
                                    <input type='submit' name='ingresos' value='Ingresos'/>
                                {/if}
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                {if empty($usuario)}
                                    <input type='submit' name='gastos' value='Gastos' disabled='true'/>
                                {else}
                                    <input type='submit' name='gastos' value='Gastos'/>
                                {/if}
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                {if empty($usuario)}
                                    <input type='submit' name='eliminarMovimientos' value='Eliminar movimientos' disabled='true'/>
                                {else}
                                    <input type='submit' name='eliminarMovimientos' value='Eliminar movimientos'/>
                                {/if}
                            </div>
                        </td>
                        <td>
                            <div class='campo'>
                                {if empty($usuario)}
                                    <input type='submit' name='preferencias' value='Preferencias' disabled='true'/>
                                {else}
                                    <input type='submit' name='preferencias' value='Preferencias'/>
                                {/if}
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
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov1}'><p></p></input>{$mov1}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov2}'><p></p></input>{$mov2}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov3}'><p></p></input>{$mov3}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov4}'><p></p></input>{$mov4}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov5}'><p></p></input>{$mov5}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov6}'><p></p></input>{$mov6}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov7}'><p></p></input>{$mov7}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov8}'><p></p></input>{$mov8}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov9}'><p></p></input>{$mov9}</label></td>
                        <td><label><input type='checkbox' name='movBorrar[]' value='{$codigoMov10}'><p></p></input>{$mov10}</label></td>
                    </tr>
                </table>
                {if empty($usuario)}
                    <input type='submit' name='eliminar' value='Eliminar' disabled='true'/>
                {else}
                    <input type='submit' name='eliminar' value='Eliminar'/>
                {/if}
            </form>
        </div>
    </body>
</html>