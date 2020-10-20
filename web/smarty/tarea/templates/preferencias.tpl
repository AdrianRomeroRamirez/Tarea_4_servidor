{* Smarty *}

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Preferencias</title>
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
            <form action='preferencias.php' method='post'>
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
                    {if empty($usuario)}
                        <input type='submit' name='enviar' value='Enviar' disabled='true'/>
                    {else}
                        <input type='submit' name='enviar' value='Enviar'/>
                    {/if}
                    <br/>
                    <input type='submit' name='restablecer' value='Restablecer preferencias'/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>