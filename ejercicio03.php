<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 3 PHP</title>
</head><body> 

<?php

//Crear un script (ejercicio01.php)
//Crear un array ordenado de cinco elementos. Inicializarlo al declararlo.
//Muestra su contenido en un bucle "for"

$bases = array( "Rigoberto", "Eustaquio");
$escoltas = array( "Pancracio", "Romualdo", "Rogelio");
$alas = array(  "Eustaquio", "Pancracio",  "Rogelio");
$aPivots = array( "Rigoberto", "Eustaquio", "Pancracio", "Romualdo", "Rogelio");
$pivots = array( "Rigoberto", "Rogelio");

$posiciones = array(
	'Base' => $bases,
	'Escolta' => $escoltas,
	'Ala' => $alas,
	'Ala-Pivot' => $aPivots,
	'Pivot' => $pivots);
//Array inicializado en la decaración

echo "<ul>";
foreach ($posiciones as $posicion=>$element){
	echo "<li>" . $posicion . "</li><ul>";
	foreach ($element as $jugador){
		echo "<li>" . $jugador . "</li>";
	}
	echo "</ul>";
}
echo "<ul>";
?>
</body></html>