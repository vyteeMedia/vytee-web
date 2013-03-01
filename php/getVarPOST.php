<?php

$numero = count($_POST);
$tags = array_keys($_POST);// obtiene los nombres de las varibles
$valores = array_values($_POST);// obtiene los valores de las varibles
for($i=0;$i<$numero;$i++){
	$$tags[$i]=$valores[$i];
}

?>
