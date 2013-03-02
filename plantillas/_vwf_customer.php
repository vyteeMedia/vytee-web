<?php
//Conectarse a la BD
include('readers/dbAccess.php');

//Inicializar el HTML
$default->inicializarHTML('vytee Work Flow - Portal para Clientes');

//Agregar CSS
$default->agregarCSS("main");
$default->agregarCSS("equipo");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();

//definir Navs
$interfaz->establecerNavs(1,"vytee Work Flow","vwf/");
$interfaz->establecerNavs(2,"Portal Clientes","vwf/customer");

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/vwf_customer.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");


$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>