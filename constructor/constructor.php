<?php
class constructorGeneral{
    function inicializarHTML($titulo){
        echo '
            <html>
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>'.$titulo.'</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="/pruebas/vytee-web/css/normalize.css">
            <link rel="stylesheet" href="/pruebas/vytee-web/css/main.css">

        ';
    }

    function agregarJavascript($script){
        switch($script){
            case 'jquery':
                echo '<script type="text/javascript" src="js/jquery.js"></script>';
                break;
            case 'framerate':
                echo '<script type="text/javascript" src="js/framerate.js"></script>';
                break;
            default:
                echo '<script type="text/javascript" src="js/'.$script.'.js"></script>';
        }
    }

    function agregarCSS($css){
        echo '<link rel="stylesheet" href="/pruebas/vytee-web/css/'.$css.'.css">';
    }

    function inicializarBODY(){
        echo '
            <script src="/pruebas/vytee-web/js/vendor/modernizr-2.6.2.min.js"></script>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
        $varhtml = include($html);
        if($varhtml==true){
            return $varhtml;
        }else{
            header ("Location: 404.html");
        }
    }
}
?>