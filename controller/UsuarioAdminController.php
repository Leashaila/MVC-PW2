<?php

class UsuarioAdminController{

    private $usuarioAdminModel;
    private $log;
    private $printer;

    public function __construct($usuarioAdminModel, $logger, $printer){
        $this->usuarioAdminModel = $usuarioAdminModel;
        $this->log = $logger;
        $this->printer = $printer;
    }

    public function listaPokemon(){
        $canciones = $this->cancionesModel->getCanciones();
        $listaPokemon = $this->usuarioAdminModel->getMostrarListaDePokemon();


        $this->log->info("Se llamo a pokemones");

        $data["listaPokemon"] = $listaPokemon;
        echo $this->printer->render( "view/labandaView.html" , $data);
    }







}
