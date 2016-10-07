<!DOCTYPE html>
<html>
	<head>
   		<meta charset="UTF-8"/>
		<title>Alta Usuario</title>
	</head>
	<body>
		<form id="formulario" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
	    <fieldset>
	        <legend>Registro</legend>
	            <label>Nombre de Usuario</label>
	            <input id="nombre" name="nombre" type="text" />
	            <br>
	            <label>Teléfono</label>
	            <input id="tlf" name="tlf" type="text" />
	            <br>
	            <input id="campo" name="enviar" type="submit" value="Enviar" />
	    </fieldset>
	</form>

	<?php
		if(isset($_GET) && !empty($_GET)){
			$name=$_GET['nombre'];
			echo"Usuario: <b>$name</b><br>";
			$telefono=$_GET['tlf'];
			echo"Telefono: <b>$telefono</b>";
		}
	?>


	</body>
</html>


