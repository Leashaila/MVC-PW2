<?php

class LoginController{
    private $render;
    private $adminModel;
    public function __construct(\Render $render, \AdminModel $adminModel)
    {
        $this->render = $render;
        $this->adminModel = $adminModel;
    }

    public function iniciarSesion(){
        if (isset($_POST['usuario'])){
            if (isset($_POST['usuario']) && isset($_POST['contraseña'])){
                $usuario = $_POST['usuario'];
                $contraseña = $_POST['contraseña'];

                $user = $this->adminModel->getLoguearUsuario($usuario,$contraseña);
            }
        }
    }

    public function validarLogin(){
        if (isset($_POST['ingreso'])){
            if (isset($_POST["usuario"]) && isset($_POST["contraseña"])) {
                $email = $_POST["usuario"];
                $password = md5($_POST["clave"]);

                $user = $this->usuarioModel->getUsuarioByEmailPassword($email,$password);

                if(empty($user)){
                    $_SESSION["errorLogin"] = 1;
                    header("Location: /GauchoRocket/");
                    exit();
                } else {
//                    header("Location: /GauchoRocket/home");
//                    exit();
                    echo $this->render->renderizar("view/home.mustache");
                }
            }
        }
    }
}
