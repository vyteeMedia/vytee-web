<?php
include('dbAccess.php'); //Conexion a la base de datos del servidor
include('dbReader.php'); //Lector de Base de Datos
include('../php/getVarPOST.php'); //Obtener Variables GET

$usuario= new dbReader();
//DEBUG
echo "usuario: ".$user."<br/>";
echo "pass: ".$pass."<br/>";

$usuario->comparar2campo('users','user','pass',$user,$pass);

$logueado=0; //Definimos el Logueado Negativo

//Creamos la sesión si el usuario existe y l
while($row = mysql_fetch_array($result)) {
    echo "nombre bd: ".$row['nombre']."<br/>";
    $_SESSION['usuario_id'] = $row['id']; // creamos la sesion "usuario_id" y le asignamos como valor el campo usuario_id
    $_SESSION['usuario_nombre'] = $row["nombre"]; // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre
    header('location: ../goo.php?q=vwf-customer');
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