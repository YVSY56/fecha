<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Fecha</title>
</head>
<style type="text/css">
	body{
		font-family: Tahoma;
		text-align: center;
	}

</style>
<body>
	<h2>Porcentajes</h2><br><br>

	<form action="fechaCtl.php" method="post">
			Fecha nacimiento:    
           <input type="date" id="fechaNacimiento" name="fechaNacimiento">
            <br><br>
            fecha actual:
            <input type="date" name="fechActual" value="<?php echo date("Y-m-d");?>" readonly>
            <br><br>
            <input type="submit" value="Confirmar" onclick="Confirmar()">
	</form>
</body>
</html>