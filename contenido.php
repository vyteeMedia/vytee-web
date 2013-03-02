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
include('php/getVarGET.php'); //Obtener variables de la URL
include('readers/dbReader.php'); //Obtener datos de la base de datos

//Generar Clases Locales
$default = new constructorGeneral();
$interfaz = new contructorInterfaz();

//definir si es generico o pre-determinado
switch($q){
    //---------------------------------------------------------
    //Empresa
    case "empresa":
        if(isset($c)){
            switch($c){
                //Empresa - Equipo
                case "equipo":
                    include("plantillas/_equipo.php");
                    break;

                default:
                    include("404.html");
                    break;
            }
        }else{
            include("plantillas/_empresa.php");
        }
        break;

    //---------------------------------------------------------
    //vytee Work Flow
    case "vwf":
        if(isset($c)){
            switch($c){
                //customer - Portal Clientes
                case "customer":
                    include("plantillas/_vwf_customer.php");
                    break;

                default:
                    include("404.html");
                    break;
            }
        }else{
            include("plantillas/_vwf.php");
        }
        break;

    //---------------------------------------------------------
    //Inicio (Animacion)
    case "inicio":
        include("plantillas/_inicio.php");
        break;

    //---------------------------------------------------------
    //Home
    case "home":
        include("plantillas/_home.php");
        break;

    //---------------------------------------------------------
    //Divisiones
    case "divisiones":
        if(isset($c)){
            switch($c){
                case "desarrollo_web":
                    include("plantillas/_desarrollo_web.php");
                    break;

                default:
                    include("404.html");
                    break;
            }
        }else{
            include("plantillas/_empresa.php");
        }
        break;


    //---------------------------------------------------------
    default:
        include("404.html");
        break;
}

?>