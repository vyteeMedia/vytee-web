<?php
//Inicializar el HTML
$default->inicializarHTML('vytee Media - Equipo');

//Agregar CSS
$default->agregarCSS("main");
$default->agregarCSS("jflow.style");
$default->agregarJavascript("jflow.plus");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();

//definir Navs
//--No se necesitan Navs

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/home.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");


$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>