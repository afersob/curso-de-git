<?php 
	//El comentrario es de prueba
	require('HolaMundo.php');

		
	$nombre =  isset($argv[1]) ? $argv[1]: "mundo";
	@print new HolaMundo($nombre);
?>
