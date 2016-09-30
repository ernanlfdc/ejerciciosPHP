<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 PHP</title>
</head><body> 

<h4> Array de cinco elementos inicializado en la declaración. <br>
Se muestra por pantalla con un bucle "for".</h4>

<?php

//Crear un script (ejercicio01.php)
//Crear un array ordenado de cinco elementos. Inicializarlo al declararlo.
//Muestra su contenido en un bucle "for"

$array = array(
	'Nombre' => "Ernán",
	'Apellidos' => "LFDC",
	'Ciclo' => "Desarrollo de Aplicaciones Web",
	'Curso' => "Segundo",
	'Módulo' => "Desarrollo Web en Entorno Servidor");
//Array inicializado en la decaración

foreach ($array as $position=>$element){
	echo $position . ":	" . $element . '<br>';
	//Recorremos el array y lo vamos mostrando por pantalla con un bucle for
}

?>
</body></html>