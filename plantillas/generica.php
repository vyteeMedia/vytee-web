<?php
//Inicializar el HTML
$default->inicializarHTML('Bienvenido a vytee Media Solutions');
$default->agregarJavascript("framerate");

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/".$q.".html");

$interfaz->insertarCreditos("general");

//Finalizar Html
$default->finalizarHTML();

?>