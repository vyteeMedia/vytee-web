<?php
//Servidor Local
function Conectarse()
{
    if (!($link=mysql_connect("localhost","root","")))
    {
        echo "Error conectando a la base de datos.";
        exit();
    }
    if (!mysql_select_db("vytee",$link))
    {
        echo "Error seleccionando la base de datos.";
        exit();
    }
    return $link;
}
$link=Conectarse();
mysql_query("SET NAMES 'utf8'"); //Leer carateres UTF8

/*
//Servidor Remoto
function Conectarse()
{
    if (!($link=mysql_connect("localhost","bi000157","zimuso39LI")))
    {
        echo "Error conectando a la base de datos.";
        exit();
    }
    if (!mysql_select_db("bi000157_vytee",$link))
    {
        echo "Error seleccionando la base de datos.";
        exit();
    }
    return $link;
}
$link=Conectarse();
mysql_query("SET NAMES 'utf8'"); //Leer carateres UTF8
*/
?>