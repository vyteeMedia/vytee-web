<?php
include('constructor/constructor.php');

$default = new constructorGeneral();
$interfaz = new contructorInterfaz();

$default->inicializarHTML('Bienvenido a vytee Media Solutions');
$default->agregarJavascript("framerate");

$default->inicializarBODY();
$interfaz->establecerWrapper();

$interfaz->agregarHTML("content/inicio.html");

$default->agregarJavascript("animacion");
$default->finalizarHTML();
?>