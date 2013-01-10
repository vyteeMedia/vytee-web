<?php
//Inicializar el HTML
$default->inicializarHTML('vytee Media - Equipo');

//Agregar CSS
$default->agregarCSS("main");
$default->agregarJavascript("framerate");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();


//definir Navs
//--No son necesarios

//Mostrar el contenido

$interfaz->agregarHTML("content/inicio.php");

$default->agregarJavascript("animacion");

$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>