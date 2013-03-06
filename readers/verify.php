<?php
include('dbAccess.php'); //Conexion a la base de datos del servidor
include('dbReader.php'); //Lector de Base de Datos
include('../php/getVarPOST.php'); //Obtener Variables GET

$usuario= new dbReader();
$logueado=0;



$usuario->comparar2campo('users','user','pass',$user,$pass);

 //Definimos el Logueado Negativo

//Creamos la sesión si el usuario existe y l
while($row = mysql_fetch_array($result)) {
    session_start();
    $_SESSION['usuario_id'] = $row['id']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
    $_SESSION['usuario_nombre'] = $row["nombre"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
    $_SESSION['usuario_apellido'] = $row["apellido"];
    $_SESSION['usuario_empresa'] = $row["correo"];
    $_SESSION['usuario_correo'] = $row["empresa"];
    header('location: ../goo.php?q=vwf/customer');
    exit;


    $logueado=1;

}

//Declara que el usuario no esta logueado si no existe
if($logueado==0){
    ?>
        Error, <a href="acceso.php">Reintentar</a><br/>
    <?php
}else{
    ?>
    conexion usuario establecida<br/>
    <?php
}
$usuario->cerrarConexion($link); //cierra la conexion
?>