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
$interfaz->establecerNavs(1,"Empresa","empresa/");
$interfaz->establecerNavs(2,"Método de Trabajo","metodo/");

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/metodo.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");

$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>