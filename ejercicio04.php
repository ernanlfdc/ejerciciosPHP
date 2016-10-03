<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 4 PHP</title>
</head><body> 

<?php

function mayor($num){
	foreach ($num as $i => $numero){
		if ($numero >= $num[$i-1]) $mayor = $numero;
	}
	return $mayor;
}

function menor($num){
	foreach ($num as $i => $numero){
		if ($numero <= $num[$i-1]) $menor = $numero;
	}
	return $menor;
}

$num = array(5, 1, 2, 4, 3, 7, 8, 9, 0 );

$sol = mayor($num);
echo "$sol <br>";

$sol = menor($num);
echo "$sol";


?>
</body></html>