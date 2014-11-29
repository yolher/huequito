<?php 
	function displayInfoInternal($id){
		require_once("gestion/models/noticias_model.php");
				
		$datos = new noticias;
		$intems = $datos->get_noticias_id($id);

		
		?>
		<div class="titlePage">
			<h1><?php echo $intems[0]["titulo_ent"]; ?></h1>
		</div>
		<div id="mainItem">
			<div class="itemImage">
				<img src="server/php/files/<?php echo $intems[0]["image_ent"]; ?>" alt="">
			</div>
			<div class="desc">
				<?php echo $intems[0]["desc_ent"]; ?>	
			</div>
			<div class="galerias">
				
			</div>
		</div>
		<?php	
	}

 ?>