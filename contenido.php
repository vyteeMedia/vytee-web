<?php
/*
 * CONTENIDO.PHP
 **********************************************
 * Heimdall vytee Framework
 * ©2013
 *
 * Main Development: Lucho Suárez
 * ********************************************
 *
 * */

//Incluir librerias
include('constructor.php'); //Constructor
include('getVarGET.php'); //Obtener variables de la URL

//Generar Clases Locales
$default = new constructorGeneral();
$interfaz = new contructorInterfaz();

//definir si es generico o pre-determinado
switch($q){
    case "empresa":
        if(isset($c)){
            switch($c){
                case "equipo":
                    include("plantillas/equipo.php");
                    break;

                default:
                    include("404.html");
                    break;
            }
        }else{
            include("404.html");
        }
        break;

    case "inicio":
        include("plantillas/inicio.php");
        break;

    default:
        include("404.html");
        break;
}

?>