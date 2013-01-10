<?php
//Inicializar el HTML
$default->inicializarHTML('vytee Media - Equipo');

//Agregar CSS
$default->agregarCSS("main");
$default->agregarCSS("equipo");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();


//definir Navs
$interfaz->establecerNavs(1,"Empresa","empresa/");
$interfaz->establecerNavs(2,"Equipo","empresa/equipo");

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/equipo.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");

$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>