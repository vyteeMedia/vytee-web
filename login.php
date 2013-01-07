<?php
include('constructor/constructor.php');

//Parametros Iniciales
$home = new constructorGeneral();
$interfaz = new contructorInterfaz();

//Head e Inicializadores
$home->inicializarHTML('Ingreso Clientes'); //Titulo de la Web
    $home->agregarJavascript('jquery');
    $home->agregarJavascript('framerate');
    $home->agregarJavascript('scripts');
$home->inicializarBODY();

//Interfaz Principal
$interfaz->establecerWrapper();
$interfaz->insertarCabecera('general');

$interfaz->insertarCreditos('general');

$home->finalizarHTML(); //Cierra el Wrapper, Body y HTML

?>