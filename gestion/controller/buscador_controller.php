<?php 
	require_once("../models/buscador_model.php");
	$datos = new buscador;

	//-- controlamos que vienen datos por via post
	if (isset($_GET["campo"]) != null) {
		
		$buscar= $_GET["campo"];
		$result = $datos->get_busqueda($buscar);

		if($result != 0){

				for ($i=0; $i <count($result); $i++) { 
				$nombre = strtolower($result[$i]["titulo_ent"]);
	            $nombreUrl = str_replace(" ", "-", $nombre);

				$array[] = array(
					"url" => $nombreUrl.'-content-'.$result[$i]["id_entry"].'.html',
					"nombre" => $result[$i]["titulo_ent"],
					"descript" => substr(strip_tags($result[$i]["desc_ent"]),0,40),
				);			
			}
			echo '' . json_encode($array) . '';
		}else{
			$array[] = array("alerta" => "error");
			echo '' . json_encode($array) . '';
		}
		
		

	}else{
		echo "Esta entrando en un lugar donde no tiene permisos comunicate conmigo @oaguillon";
	}

 ?>