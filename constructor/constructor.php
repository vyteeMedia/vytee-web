<?php
class constructorGeneral{
    function inicializarHTML($titulo){
        echo '
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>'.$titulo.'</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/main.css">
            <script src="js/vendor/modernizr-2.6.2.min.js"></script>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        ';
    }

    function agregarJavascript($script){
        switch($script){
            case 'jquery':
                echo '<script type="text/javascript" src=js/jquery.js"></script>';
                break;
            case 'framerate':
                echo '<script type="text/javascript" src="js/framerate.js"></script>';
                break;
            default:
                echo '<script type="text/javascript" src="js/'.$script.'.js"></script>';
        }
    }

    function inicializarBODY(){
        echo '
            </head>
            <body>
        ';
    }

    function finalizarHTML(){
        echo '
            </div>

            </body>
            </html>
        ';
    }
}

class contructorInterfaz{
    function insertarCabecera($tipo){
        include('cabecera/'.$tipo.'.html');
    }


    function insertarCreditos($tipo){
        include('creditos/'.$tipo.'.html');
    }

    function establecerWrapper(){
        echo'
            <div id="wrapper">
        ';
    }

    function agregarHTML($html){
        include($html);
    }
}
?>