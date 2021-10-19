<?php

class UsuarioAdminModel{

    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getDarDeBajaUnUsuarioCliente(){
        return $this->database->query(""); //consulta de eliminar un usuario cliente

    }

    public function getGenerarFacturacionMensual(){
        return $this->database->query(""); //consulta de generar facturacion mensual
    }

    public function getBuscarReportes(){
        return $this->database->query(""); //consulta de buscar reportes
    }







}
