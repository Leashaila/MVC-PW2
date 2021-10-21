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

    public function description(){
        $reportes = $this->usuarioAdminModel->getBuscarReportes($_GET[""]);

        $data["reportes"] = $reportes;
        echo $this->printer->render( "view/usuarioAdminView.html" , $data);
    }


}