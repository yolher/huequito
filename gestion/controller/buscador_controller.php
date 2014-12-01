<?php 
	require_once("../models/buscador_model.php");
	$datos = new buscador;

	//-- controlamos que vienen datos por via post
	if (isset($_POST["into"]) != null) {
		
		$buscar= $_POST["into"];

	}else{
		echo "Esta entrando en un lugar donde no tiene permisos comunicate conmigo @oaguillon";
	}

 ?>