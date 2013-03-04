<?php
//Inicializar el HTML
$default->inicializarHTML('vytee Media - Método de Trabajo');

//Agregar CSS
$default->agregarCSS("main");
$default->agregarCSS("equipo");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();

//definir Navs
$interfaz->establecerNavs(1,"Tienda","tienda/");
$interfaz->establecerNavs(2,"Paquetes Desarrollo Web","divisiones/desarrollo_web");
$interfaz->establecerNavs(3,"Para Personas","paquetes/personas");

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/paquetes-personas.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");

$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>