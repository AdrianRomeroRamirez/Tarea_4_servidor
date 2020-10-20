{* Smarty *}

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ultimos Movimientos</title>
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
            <form action='ultimosMovimientos.php' method='post'>
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
                        <td>{$fecha1}</td>
                        <td>{$cantidad1}</td>
                    </tr>
                    <tr>
                        <td>{$fecha2}</td>
                        <td>{$cantidad2}</td>
                    </tr>
                    <tr>
                        <td>{$fecha3}</td>
                        <td>{$cantidad3}</td>
                    </tr>
                    <tr>
                        <td>{$fecha4}</td>
                        <td>{$cantidad4}</td>
                    </tr>
                    <tr>
                        <td>{$fecha5}</td>
                        <td>{$cantidad5}</td>
                    </tr>
                    <tr>
                        <td>{$fecha6}</td>
                        <td>{$cantidad6}</td>
                    </tr>
                    <tr>
                        <td>{$fecha7}</td>
                        <td>{$cantidad7}</td>
                    </tr>
                    <tr>
                        <td>{$fecha8}</td>
                        <td>{$cantidad8}</td>
                    </tr>
                    <tr>
                        <td>{$fecha9}</td>
                        <td>{$cantidad9}</td>
                    </tr>
                    <tr>
                        <td>{$fecha10}</td>
                        <td>{$cantidad10}</td>
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
</html>