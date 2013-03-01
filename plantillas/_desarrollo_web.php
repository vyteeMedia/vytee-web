<?php
//Inicializar el HTML
$default->inicializarHTML('vytee Media - Desarrollo Web');

//Agregar CSS
$default->agregarCSS("main");
$default->agregarCSS("equipo");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();

//definir Navs
$interfaz->establecerNavs(1,"Divisiones","divisiones/");
$interfaz->establecerNavs(2,"Desarrollo Web","divisiones/desarrollo_web");

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/desarrollo_web.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");

$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>