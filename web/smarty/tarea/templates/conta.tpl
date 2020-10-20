{* Smarty *}

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Contabilidad</title>
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
                {/if}</p>
        </div>
        <div id='login'>
            <form action='conta.php' method='post'>
                <fieldset >
                    <legend>Menú</legend>
                    <div><span class='error'>{$error}</span></div>
                    <div class='campo'>
                        {if empty($usuario)}
                            <input type='submit' name='ultimosMovimientos' value='Ultimos movimientos' disabled='true'/>
                        {else}
                            <input type='submit' name='ultimosMovimientos' value='Ultimos movimientos'/>
                        {/if}
                    </div>
                    <div class='campo'>
                        {if empty($usuario)}
                            <input type='submit' name='ingresos' value='Ingresos' disabled='true'/>
                        {else}
                            <input type='submit' name='ingresos' value='Ingresos'/>
                        {/if}
                    </div>
                    <div class='campo'>
                        {if empty($usuario)}
                            <input type='submit' name='gastos' value='Gastos' disabled='true'/>
                        {else}
                            <input type='submit' name='gastos' value='Gastos'/>
                        {/if}
                    </div>
                    <div class='campo'>
                        {if empty($usuario)}
                            <input type='submit' name='eliminarMovimientos' value='Eliminar movimientos' disabled='true'/>
                        {else}
                            <input type='submit' name='eliminarMovimientos' value='Eliminar movimientos'/>
                        {/if}
                    </div>
                    <div class='campo'>
                        {if empty($usuario)}
                            <input type='submit' name='preferencias' value='Preferencias' disabled='true'/>
                        {else}
                            <input type='submit' name='preferencias' value='Preferencias'/>
                        {/if}
                    </div>
                    <div class='campo'>
                        <input type='submit' name='volver' value='Salir' />
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>