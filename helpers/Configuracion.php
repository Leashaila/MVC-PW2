<?php

class Configuracion
{

    public static function getDatabase()
    {
        include_once("Database.php");
        $config = self::getConfigurationParameters();
        return new Database($config["servername"], $config["username"], $config["password"], $config["dbname"]);

    }

    private static function getConfigurationParameters()
    {
        return parse_ini_file("configuration/config.ini");
    }

    public static function getRender()
    {
        include("third-party/mustache/src/Mustache/Autoloader.php");
        include_once("Render.php");
        return new Render("view/partial");
    }


    public static function getUsuarioModel(){
        $database = self::getDatabase();
        include_once ("model/usuarioModel.php");
        return new usuarioModel($database);
    }

     public static function getLoginModel(){
        $database = self::getDatabase();
        include_once ("model/loginModel.php");
        return new loginModel($database);
    }

    public static function getLoginController()
    {
        $render = self::getRender();
        $usuarioModel = self::getLoginModel();

        include_once("controller/LoginController.php");
        return new LoginController($render,$usuarioModel);
    }




    public function getRouter(){
        include_once("Router.php");
        return new Router($this);
    }

    public function getUrlHelper(){
        include_once("helpers/UrlHelper.php");
        return new UrlHelper();
    }





}
