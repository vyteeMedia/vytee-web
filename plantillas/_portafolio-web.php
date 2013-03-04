<?php
//Inicializar el HTML
$default->inicializarHTML('vytee Media - Equipo');

//Establesco el viewport
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

//Agregar CSS
$default->agregarCSS("main");
$default->agregarCSS("equipo");

//Agregar CSS Auxiliares
echo'
    <link rel="stylesheet" type="text/css" href="'.STATIC_URL.'css/default.css" />
    <link rel="stylesheet" type="text/css" href="'.STATIC_URL.'css/climacons.css" />
    <link rel="stylesheet" type="text/css" href="'.STATIC_URL.'css/component2.css" />
    <script src="js/modernizr.custom.js"></script>
    ';

//Iniciar el body
$default->inicializarBODY();
$interfaz->establecerWrapper();


//definir Navs
$interfaz->establecerNavs(1,"Portafolio","portafolio/desarrolloWeb");
$interfaz->establecerNavs(2,"Desarrollo Web","portafolio/desarrolloWeb");

//Mostrar el contenido
$interfaz->insertarCabecera("general");

$interfaz->agregarHTML("content/portafolio-web.php");

$interfaz->insertarCreditos("general");

$default->agregarJavascript("animacionInicio");

$interfaz->cerrarWrapper();
//Finalizar HTML
$default->finalizarHTML();

?>