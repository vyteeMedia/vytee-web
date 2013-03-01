<?php
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
echo "Conexión con la base de datos conseguida.<br>";
?>