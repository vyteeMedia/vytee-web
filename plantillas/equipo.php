<?php
//Inicializar el HTML
$default->inicializarHTML('Bienvenido a vytee Media Solutions');
$default->agregarJavascript("framerate");

//Agregar CSS extras
$default->agregarCSS("equipo");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/equipo.html");

$interfaz->insertarCreditos("general");

//Finalizar HTML
$default->finalizarHTML();

?>