<?php

include('config.php');
class constructorGeneral{
    function inicializarHTML($titulo){
        //Inicializa Sesion
        session_start();

        //Imprimi el html inicial
        echo '
            <!DOCTYPE html>
            <html>
            <head>

            <title>'.$titulo.'</title>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width">
            <link rel="icon" type="image/png" href="favicon.png"/>

            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript" src="'.STATIC_URL.'js/main.js"></script>
        ';
    }

    function agregarJavascript($script){
        echo '<script type="text/javascript" src="'.STATIC_URL.'js/'.$script.'.js"></script>';
    }

    function agregarCSS($css){
        echo '<link rel="stylesheet" href="'.STATIC_URL.'css/'.$css.'.css">';
    }

    function inicializarBODY(){
        echo '


            </head>
            <body>
        ';
    }

    function finalizarHTML(){
        echo '
            </body>
            </html>
        ';
    }
}

class contructorInterfaz{
    function establecerNavs($nav,$nombre,$link){
        //Leer Variables Globales
        global $nav1,$nav2,$nav3,$nav4,$nav5,$nav6;
        global $link1,$link2,$link3,$link4,$link5,$link6;

        switch($nav){
            case 1:
                $nav1=$nombre;
                $link1=STATIC_URL.$link;
                break;
            case 2:
                $nav2=$nombre;
                $link2=STATIC_URL.$link;
                break;
            case 3:
                $nav3=$nombre;
                $link3=STATIC_URL.$link;
                break;
            case 4:
                $nav4=$nombre;
                $link4=STATIC_URL.$link;
                break;
            case 5:
                $nav5=$nombre;
                $link5=STATIC_URL.$link;
                break;
            case 6:
                $nav6=$nombre;
                $link6=STATIC_URL.$link;
                break;
        }
    }

    function insertarCabecera($tipo){
        global $nav1,$nav2,$nav3,$nav4,$nav5,$nav6;
        global $link1,$link2,$link3,$link4,$link5,$link6;
        include('plantillas/cabecera/'.$tipo.'.php');
    }


    function insertarCreditos($tipo){
        include('plantillas/creditos/'.$tipo.'.php');
    }

    function establecerWrapper(){
        echo'
            <div id="wrapper">
        ';
    }

    function cerrarWrapper(){
        echo '
            </div>
        ';
    }

    function agregarHTML($html){
        $varhtml = include($html);
        if($varhtml==true){
            return $varhtml;
        }else{
            header ("Location: 404.html");
        }
    }
}

function linkTo($link){
    $ruta = "'".STATIC_URL.$link."'";
    echo 'style="cursor: pointer" onclick="location.href='.$ruta.'"';
}
?>