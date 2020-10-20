{* Smarty *}

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body {$fondo}>
        <div>
            {$tiempoSesion}
        </div>
        <div id='login'>
            <form action='index.php' method='post'>
                <fieldset >
                    <legend>Login</legend>
                    <div><span class='error'>{$error}</span></div>
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
</html>