<?php 
	require_once("gestion/models/category_model.php");

	function displayCategoriesFront(){
		$datos = new categorias;
		$getCat = $datos->get_categories_mod();

		for ($i=0; $i <count($getCat) ; $i++) { ?>
			<div class="contcat">
					<h2 class="title"><?php echo $getCat[$i]['name_cat']; ?></h2>
					<a href="<?php echo strtolower($getCat[$i]['name_cat']); ?>" alt="<?php echo $getCat[$i]['name_cat']; ?>" title="<?php echo $getCat[$i]['name_cat']; ?>">
						<img src="server/php/files/<?php echo $getCat[$i]["image_cat"]; ?>" alt="<?php echo $getCat[$i]['name_cat']; ?>">
					</a>
					<div class="readMore">
						<a href="<?php echo strtolower($getCat[$i]['name_cat']); ?>" alt="<?php echo $getCat[$i]['name_cat']; ?>" title="<?php echo $getCat[$i]['name_cat']; ?>">
							Leer más...
						</a>
					</div>
				</div>
		<?php }



		
			
	}

?>
