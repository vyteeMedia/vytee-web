<?php
//Inicializar el HTML
$default->inicializarHTML('vytee Media - Empresa');

//Agregar CSS
$default->agregarCSS("main");
$default->agregarCSS("equipo");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();


//definir Navs
$interfaz->establecerNavs(1,"Empresa","empresa/");

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/empresa.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");

$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>