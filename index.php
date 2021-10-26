<?php
session_start();
include_once("config/Configuration.php");


$module = isset($_GET["module"]) ? $_GET["module"] : "laBanda" ;
$action = isset($_GET["action"]) ? $_GET["action"] : "listaPokemon" ;

$configuration = new Configuration();
$router = $configuration->createRouter( "UsuarioAdminController", "listaPokemon");

$router->executeActionFromModule($module,$action);