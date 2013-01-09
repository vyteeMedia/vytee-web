<?php
$url = $_GET['url'];

$urlArray = explode("/",$url);
@$controller = $urlArray[0];
@$action = $urlArray[1];

/*echo "controlador: ".$controller;

echo "<br/>action: ".$action;

echo "<br/><br/>";*/

switch ($controller){
    case "empresa":
        switch($action){
            case "equipo":
                $q="equipo";

                include(''); //Constructor
                $default = new constructorGeneral();
                $interfaz = new contructorInterfaz();

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


                break;
        }
        break;
}

?>