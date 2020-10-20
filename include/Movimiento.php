<?php

/**
 * Clase para crear un Movimientos
 */
class Movimiento {
    
    protected $codigoMov; // Codigo del movimiento
    protected $loginUsu; // Login del usuario que hizo el movimiento
    protected $fecha; // Fecha en la que se hizo el movimiento
    protected $concepto; // Concepto del movimiento
    protected $cantidad; // Cantidad del movimiento
    
    /**
     * Función para obtener el codigo del movimiento
     * @return type codigo del movimiento
     */
    function getCodigoMov() {
        return $this->codigoMov;
    }

    /**
     * Función para obtener el login del usuario
     * @return type login del usuario
     */
    function getLoginUsu() {
        return $this->loginUsu;
    }

    /**
     * Función para obtener la fecha
     * @return type fecha
     */
    function getFecha() {
        return $this->fecha;
    }

    /**
     * Función para obtener el concepto
     * @return type concepto
     */
    function getConcepto() {
        return $this->concepto;
    }

    /**
     * Función para obtener la cantidad
     * @return type cantidad
     */
    function getCantidad() {
        return $this->cantidad;
    }

    /**
     * Constructor con parámetros
     * @param type $row texto con los datos necesarios para crear el movimiento
     */
    function __construct($row) {
        $this->codigoMov = $row['codigoMov'];
        $this->loginUsu = $row['loginUsu'];
        $this->fecha = $row['fecha'];
        $this->concepto = $row['concepto'];
        $this->cantidad = $row['cantidad'];
    }


}
