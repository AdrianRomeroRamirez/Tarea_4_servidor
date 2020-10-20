<?php

require_once('Usuario.php');
require_once('Movimiento.php');

/**
 * Clase para usar funciones relacionadas con la base de datos
 */
class DB {

    /**
     * Función que devuelve la conexión a la base de datos
     * @return \PDO conexión a la abse de datos
     */
    protected static function conexionBD() {
        try {
            // Array con opciones
            $arrOptions = array(
                PDO::ATTR_EMULATE_PREPARES => FALSE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            );
            // se crea la conexión
            $con = new PDO('mysql:host=localhost;dbname=conta4', 'daw', 'daw', $arrOptions);
        } catch (Exception $e) { // Se controla las excepciones
            echo 'ERROR: ' . $e->getMessage();
            die();
        }
        // Se devuelve la conexión
        return $con;
    }

    /**
     * Función que verifica si existe el usuario pasado por parámetro y si la contraseña también pasada 
     * le corresponde
     * @param type $login nombre del usuario
     * @param type $password contraseña del usuario
     * @return boolean devuelve si se ha verificado el usuario o no
     */
    public static function verificaUsuario($login, $password) {
        try {
            // Se establece la conexión y se realiza la consulta del usuario
            $con = self::conexionBD();
            $sql = "SELECT login, password FROM usuarios WHERE login = ?";
            $resultado = $con->prepare($sql);
            $resultado->execute(array($login));
            $verificado = false;

            // Si el usuario existe, se comprueba la contraseña y se verifica
            if ($registro = $resultado->fetch()) {
                if ($registro['login'] == $login && password_verify($password, $registro['password'])) {
                    $verificado = true;
                }
            }
        } catch (Exception $e) { // Se controla las excepciones
            echo 'ERROR: ' . $e->getMessage();
            die();
        }
        // Devuelve si se ha verificado o no
        return $verificado;
    }

    /**
     * Función que devuelve al Usuario cuyo login se pasa por parámetro
     * @param type $login login del usuario
     * @return \Usuario Devuelve al usuario
     */
    public static function obtenerUsuario($login) {
        try {
            // se establece la conexión y se ejecuta la consulta
            $con = self::conexionBD();
            $sql = "SELECT login, presupuesto FROM usuarios WHERE login = ?";
            $resultado = $con->prepare($sql);
            $resultado->execute(array($login));
            $usuario = null;

            // Si hay datos en la consulta, se guardan los datos y se crea al Usuario
            if (isset($resultado)) {
                $row = $resultado->fetch();
                $usuario = new Usuario($row);
            }
        } catch (Exception $e) { // Se controla las excepciones
            echo 'ERROR: ' . $e->getMessage();
            die();
        }
        // Se devuelve al usuario
        return $usuario;
    }

    /**
     * Función que devuelve un array con todos los movimientos del usuario
     * @param type $login del usuario
     * @return \Movimiento Array con todos los movimientos
     */
    public static function obtenerMovimientos($login) {
        try {
            // se establece la conexión y se ejecuta la consulta
            $con = self::conexionBD();
            $sql = "SELECT codigoMov, loginUsu, fecha, concepto, cantidad FROM movimientos WHERE loginUsu = ? order by fecha desc";
            $resultado = $con->prepare($sql);
            $resultado->execute(array($login));
            $movimientos = array();

            // Si tiene resultados, se guarda los datos y se va creando movimientos y guardandolos
            // hasta que ya no haya mas datos
            if (isset($resultado)) {
                $row = $resultado->fetch();
                while ($row != null) {
                    $movimientos[] = new Movimiento($row);
                    $row = $resultado->fetch();
                }
            }
        } catch (Exception $e) { // Se controla las excepciones
            echo 'ERROR: ' . $e->getMessage();
            die();
        }
        // Se devuelve el array con los movimientos
        return $movimientos;
    }

    /**
     * Función que borra todos los datos de la base de datos menos a los dos usuarios iniciales
     */
    public static function borrarDatosAnteriores() {
        try {
            // se establece la conexión y se ejecuta la consulta
            $con = self::conexionBD();
            $sqlMov = "DELETE FROM movimientos";
            $sqlUsu = "DELETE FROM usuarios WHERE login NOT IN ('usuario1', 'usuario2')";
            $consulta = $con->prepare($sqlMov);
            $consulta->execute();
            $consulta = $con->prepare($sqlUsu);
            $consulta->execute();
        } catch (Exception $e) { // Se controla las excepciones
            echo 'ERROR: ' . $e->getMessage();
            die();
        }
    }

    /**
     * Función para hacer un ingreso
     * @param type $loginUsu Usuario que hace el ingreso
     * @param type $cantidad Cantidad a ingresar
     */
    public static function ingresar($loginUsu, $cantidad) {
        try {
            // Se crea la conexión
            $con = self::conexionBD();
            // Se guarda la fecha actual
            $fecha = date('Y-m-d');
            // Se guarda el concepto
            $concepto = 'ingreso';
            // Se guarda la consulta
            $sql = "INSERT INTO `movimientos` (`loginUsu`, `fecha`, `concepto`, `cantidad`)"
                    . " VALUES (?, ?, ?, ?);";
            // Se prepara la consulta
            $consulta = $con->prepare($sql);
            // Se pasa los parámetros a la consulta
            $consulta->bindParam(1, $loginUsu);
            $consulta->bindParam(2, $fecha);
            $consulta->bindParam(3, $concepto);
            $consulta->bindParam(4, $cantidad);
            // Se ejecuta
            $consulta->execute();
        } catch (Exception $e) { // Se controla las excepciones
            echo 'ERROR: ' . $e->getMessage();
            die();
        }
    }

    /**
     * Función para hacer un gasto
     * @param type $loginUsu Usuario que hace el gasto
     * @param type $cantidad Cantidad a gastar
     */
    public static function gastar($loginUsu, $cantidad) {
        try {
            // Se crea la conexión
            $con = self::conexionBD();
            // Se guarda la fecha actual
            $fecha = date('Y-m-d');
            // Se guarda el concepto
            $concepto = 'gasto';
            // Se guarda la consulta
            $sql = "INSERT INTO `movimientos` (`loginUsu`, `fecha`, `concepto`, `cantidad`)"
                    . " VALUES (?, ?, ?, ?);";
            // Se prepara la consulta
            $consulta = $con->prepare($sql);
            // Se pasa los parámetros a la consulta
            $consulta->bindParam(1, $loginUsu);
            $consulta->bindParam(2, $fecha);
            $consulta->bindParam(3, $concepto);
            $consulta->bindParam(4, $cantidad);
            // Se ejecuta
            $consulta->execute();
        } catch (Exception $e) { // Se controla las excepciones
            echo 'ERROR: ' . $e->getMessage();
            die();
        }
    }

    /**
     * Función que borrar los movimientos pasado por parámetros
     * @param type $movimientos Array con los movimientos a eliminar
     */
    public static function borrarMovimientos($movimientos) {
        try {
            // Se guarda la consulta
            $sql = "DELETE FROM movimientos WHERE codigoMov = ?";
            // Se crea la conexión
            $con = self::conexionBD();
            // Se prepara la consulta
            $consulta = $con->prepare($sql);
            // Itera por cada dato dentro del array
            foreach ($movimientos as $movimiento) {
                // Se pasa el código a la consulta y se ejecuta
                $consulta->bindParam(1, $movimiento);
                $consulta->execute();
            }
        } catch (Exception $e) { // Se controla las excepciones
            echo "Error: " . $e->getMessage();
            die();
        }
    }

}
