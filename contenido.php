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
include('constructor/constructor.php'); //Constructor
include('getVarGET.php'); //Obtener variables de la URL

//Generar Clases Locales
$default = new constructorGeneral();
$interfaz = new contructorInterfaz();

//Inicializar el HTML
$default->inicializarHTML('Bienvenido a vytee Media Solutions');
$default->agregarJavascript("framerate");
$default->inicializarBODY();

//Iniciar el body
$interfaz->establecerWrapper();

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/".$q.".html");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacion");
$default->finalizarHTML();
?>