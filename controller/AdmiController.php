<?php

class AdmiController
{

    private $render;
    private $usuarioModel;

    public function __construct(\Render $render, \UsuarioModel $usuarioModel)
    {
        $this->render = $render;
        $this->usuarioModel = $usuarioModel;
    }

    public function darAltaPokemon()
    {
        $tipo=$_POST['nombre_tipo'];
        $this->usuarioModel->subirTipoPokemon($tipo);

        $idTipoPokemonEncontrado = $this->usuarioModel->getTipoPokemon($tipo);

        $nombre= $_POST['nombre_pokemon'];
        $descripcion= $_POST['descripcion'];
        $id_usuario= $_POST['id_usuario'];
        $id_tipo= $idTipoPokemonEncontrado;

        $this->usuarioModel->subirPokemon($nombre, $descripcion, $id_usuario, $id_tipo);

    }

    public function darBajaPokemon()
    {
        $id=$_POST['id'];
        $this->usuarioModel->eliminarPokemon($id);
        
    }

    public function modificarPokemon()
    {
       
        
    }
}