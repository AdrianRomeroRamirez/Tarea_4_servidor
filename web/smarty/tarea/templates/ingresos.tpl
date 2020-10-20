{* Smarty *}

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ingresos</title>
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
            <form action='ingresos.php' method='post'>
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
        <div id="login">
            <form action='ingresos.php' method='post'>
                <fieldset>
                    <legend>Ingresos</legend>
                    <label><p>Cantidad a ingresar</p>
                    <!-- Campo para los ingresos -->
                    <input type="number" name="ingreso" placeholder="Cantida a ingresar" step="0.01" min="0.01" value="0.01"></label>
                    <div class='campo'>
                        {if empty($usuario)}
                            <input type='submit' name='ingresar' value='Ingresar' disabled='true'/>
                        {else}
                            <input type='submit' name='ingresar' value='Ingresar'/>
                        {/if}
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>