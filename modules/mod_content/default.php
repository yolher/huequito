<?php 
	function displayInfo($id){
		require_once("gestion/models/noticias_model.php");
		require_once("gestion/models/menus_model.php");
		
		$datos = new menu;
		$noticias = new noticias;

		$menus = $datos->all_like_menus($id);

		function contentCategory($item){
			//echo count($item);
			for ($i=0; $i < count($item); $i++) { 
				$nombre = strtolower($item[$i]["titulo_ent"]);
				$nombreUrl = str_replace(" ", "-", $nombre);
				echo '<div class="itemBloock">
						<div class="titulo"><a href="'.$nombreUrl.'-content-'.$item[$i]["id_entry"].'.html">'.substr($item[$i]["titulo_ent"],0,50).'</a></div>
						<div class="image">
							<a href="'.$nombreUrl.'-content-'.$item[$i]["id_entry"].'.html">
								<img src="server/php/files/'.$item[$i]["image_ent"].'">
							</a>
						</div>
						<div class="descripcion">'.substr($item[$i]["desc_ent"],0,80).'...</div>
						<div class="readMore"><a href="'.$nombreUrl.'-content-'.$item[$i]["id_entry"].'.html">Leer Más</a></div>
				</div>';
			}
		}

		function contentAlone($item){

			echo '<div id="mainItem">
					<div class="itemImage">						
						<img src="server/php/files/'.$item[0]["image_ent"].'">						
					</div>
					<div class="desc">'.$item[0]["desc_ent"].'</div>
					
			</div>';
			
		}
		
		$id_menu = $menus[0]["id_tipo"];
		$tipo = $menus[0]["tipo"];

		if ($tipo == "categoria") {
			$item = $noticias->get_noticias_cat($id_menu);
			echo '<div id="categories">';
			contentCategory($item);
			echo '</div>';
		}else if($tipo == "item"){
			$item = $noticias->get_noticias_id($id_menu);
			echo '<div id="items">';
			contentAlone($item);
			echo '</div>';
		}

		
	}

 ?>