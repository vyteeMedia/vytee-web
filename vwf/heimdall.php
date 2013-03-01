<?php
session_start();
include('dbAccess.php'); // incluímos los datos de acceso a la BD
	if(isset($_SESSION['usuario_nombre'])) {
        echo "
			**********************************<br/>
			HEIMDALL GATE PROTECTOR //////////<br/>
			Copyright vytee 2012 - Información Acerca del Usuario<br/><br/><br/>
		";
        $result=mysql_query("select * from usuarios WHERE id='".$_SESSION['usuario_id']."'");
        while($row = mysql_fetch_array($result)){
            $tipo=$row['tipo'];
            $apellido=$row['apellido'];
        }
        echo "Usuario: ".$_SESSION['usuario_id']."</br>";
        echo "Nombre: ".$_SESSION['usuario_nombre']."</br>";
        echo "Apellido: ".$apellido."</br>";
        echo "Usuario tipo: ".$tipo."</br>";
        switch ($tipo) {
            case "Administrador Dios":
                echo '
                            <body>
                                <script type="text/javascript">
                                    window.location="dashboard.php?tipo=dios";
                                </script>
                            </body>
                        ';
                break;
            case "participante":
                echo '<body>
                                <script type="text/javascript">
                                    window.location="dashboard.php?tipo=participante";
                                </script>
                            </body>';
                break;
            case "delegado":
                echo '<body>
                                <script type="text/javascript">
                                    window.location="dashboard.php?tipo=delegado";
                                </script>
                            </body>';
                break;
            case "administrador":
                echo '<body>
                                <script type="text/javascript">
                                    window.location="dashboard.php?tipo=dios";
                                </script>
                            </body>';
                break;
        }
    } else {
        echo "error, usuario no identificado";
    }
?>