<?php

if (isset($_POST['submit'])) {
								
	if (empty($nombre)) {
		echo "<p class='error'> Agrea tu nombre </p>";
	} else {
		if (strlen($nombre) < 4) {
			echo "<p class='error'> El nombre es muy corto </p>";
		}
	}

	if(empty($edad)){
		echo "<p class='error'> Agrea tu edad </p>";
	} else{
		if (!is_numeric($edad)) {
			echo "<p class='error'> La edad debe ser un número </p>";
		}
	}

	if (empty($correo)) {
		echo "<p class='error'> Agrega tu correo </p>";
	} else{
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			echo "<p class='error'> Ingrese un correo valido </p>";
		}   
	}
}


?>

