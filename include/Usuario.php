<?php

/**
 * Clase para crear un Usuario
 */
class Usuario {

    protected $login; // Login del suario
    protected $presupuesto; // Presupuesto del usuario

    /**
     * Funcion para obtener el login
     * @return type login del usuario
     */
    function getLogin() {
        return $this->login;
    }

    /**
     * Función que devuelve el presupuesto
     * @return type presupuesto del usuario
     */
    function getPresupuesto() {
        return $this->presupuesto;
    }

    /**
     * Constructor con parametros
     * @param type $row texto con los datos necesarios para crear el usuario
     */
    function __construct($row) {
        $this->login = $row['login'];
        $this->presupuesto = $row['presupuesto'];
    }

}
