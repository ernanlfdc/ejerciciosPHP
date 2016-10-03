<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 5 PHP</title>
</head><body> 

<?php

function ordenar(&$num){
	foreach ($num as $k){
		foreach($num as $j => $numero){
			if ($num[$j] > $num[$j+1]){
				$numero = $num[$j];
				$num[$j] = $num[$j+1];
				$num[$j+1] = $numero;
			}
		}
	}
}

$num = array(5, 1, 2, 4, 3, 7, 8, 9, 10, 78, 34, 8, 11, 24 );

ordenar($num);

foreach($num as $element){
	echo "$element ";
}


?>
</body></html>