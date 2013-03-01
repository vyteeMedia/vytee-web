<?php
class dbReader{
    function comparar1campo($tabla, $campo1, $patron){
        global $result;
        $result = mysql_query("SELECT * FROM $tabla WHERE $campo1 LIKE '$patron'");
    }

    function comparar2campo($tabla, $campo1, $campo2, $patron1, $patron2){
        global $result;
        $result = mysql_query("SELECT * FROM $tabla WHERE $campo1 = '$patron1' AND $campo2 = '$patron2'");
    }

    function cerrarConexion($link){
        mysql_close($link);
    }
}
?>