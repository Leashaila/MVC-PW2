<?php

class AdminModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }

    public function getDarDeAltaPokemon(){
        return $this->database->query("SELECT * FROM canciones");
    }

    public function getDarDebajaPokemon($id){
        $SQL = "SELECT * FROM canciones WHERE idCancion = $id ";
        return $this->database->query($SQL);
    }

    public function getEditarPokemon(){

    }

    public function getLoguearUsuario($nombre_usuario,$contraseña){


    }

    public function getBuscarPokemonExistente(){

    }

    public function getBuscarPokemonInexistente(){

    }

    public function getMostrarListaDePokemon(){

    }
}