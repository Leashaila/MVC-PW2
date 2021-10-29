<?php

class loginModel{

    private $database;

    public function __construct($database){
        $this->database = $database;
    }


    public function getUsuarioYContraseña($usuario,$contraseña){
        return $this->database->consulta("select nombre_usuario,contraseña
                                        from usuario
                                        where nombre_usuario =".$usuario. "and contraseña=".$contraseña);
    }







}