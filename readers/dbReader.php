<?php
class dbReader{
    function comparar1campo($tabla, $campo1, $patron){
        global $result;
        $result = mysql_query("SELECT * FROM $tabla WHERE $campo1 = '$patron'");
    }

    function comparar2campo($tabla, $campo1, $campo2, $patron1, $patron2){
        global $result;
        $result = mysql_query("SELECT * FROM $tabla WHERE $campo1 = '$patron1' AND $campo2 = '$patron2'");
    }

    function cerrarConexion($link){
        mysql_close($link);
    }
}
function obtenerDatoUsuario($cosa){
    $patron=$_SESSION['usuario_id'];
    switch($cosa){
        case 'proyectos activos':
            $result = mysql_query("SELECT * FROM proyectos WHERE cliente_id = '$patron' AND activo = 1");
            $numero = mysql_num_rows($result);
            echo $numero;
        break;

        default:
            $result = mysql_query("SELECT * FROM users WHERE id = '$patron'");
            while($row = mysql_fetch_array($result)) {
                echo $row[$cosa];
            }
    }
}

function obtenerDatoProyecto($cosa){
    $patron=$_SESSION['usuario_id'];
    switch($cosa){
        default:
            $result = mysql_query("SELECT * FROM proyectos WHERE cliente_id = '$patron'");
            while($row = mysql_fetch_array($result)) {
                echo $row[$cosa];
            }
    }
}

?>