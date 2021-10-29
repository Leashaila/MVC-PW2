<?php

class usuarioModel{


	private $database;


    public function __construct($database){
        $this->database = $database;
    }


    public function eliminarPokemon($id){
        return $this->database->consulta("delete from pokemon
                                          where id_pokemon =".$id);
    }

    public function subirTipoPokemon($nombre_tipo){

    	return $this->database->consulta("insert into pokemon(nombre_pokemon, descripcion, id_usuario,id_tipo)
        								  values ($nombre_tipo)");

    }

    public function subirPokemon($nombre, $descripcion, $id_usuario, $id_tipo ){
        return $this->database->consulta("insert into pokemon (nombre_pokemon, descripcion, id_usuario,id_tipo)
        								  values ($nombre, $descripcion, $id_usuario, $id_tipo)");
    }

    public function modificarPokemon($id, $atributoAModificar){
        return $this->database->consulta("update pokemon
                                          set id_pokemon =".$atributoAModificar."
                                          where id_pokemon=".$id);
    }


}
