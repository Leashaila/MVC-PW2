<?php

class UsuariosModel{

    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function getRol($id){
        $SQL = "SELECT * FROM usuario WHERE rol_usuario = $id ";
        return $this->database->query($SQL);
    }



}
