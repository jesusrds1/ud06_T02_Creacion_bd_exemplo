<?php

	//Conexión

	$conexionBD = @mysqli_connect('localhost', 'jesus', '1234');



	if (!$conexionBD) {

		echo('Erro número ' . mysqli_connect_errno() . ' ao establecer a conexión: ' . mysqli_connect_error() . '.<br/>');

	} else {

		echo('Conexión establecida con éxito<br/>');

	



		//Creacióndunha BD

		if (mysqli_query($conexionBD, 'CREATE DATABASE iaw2') === TRUE) {

		echo('Creouse correctamente a BD chamada iaw2.<br/>');

		} else {

		echo('Erro na creación da BD: ' . mysqli_error($conexionBD) . '<br/>');

		}



		//Desconexión

		if (!@mysqli_close($conexionBD)) {

			echo('Erro número ' . mysqli_errno($conexionBD) . ' ao pechar a conexión: ' . mysqli_error($conexionBD) . '.<br/>');

		} else {

			echo('Conexión pechada con éxito');

		}

	}

?>