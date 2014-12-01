<?php 
	require_once("gestion/models/category_model.php");

	function displayCategoriesList(){
		$datos = new categorias;
		$getCat = $datos->get_categories(); ?>
		<ul>
		<?php for ($i=0; $i <count($getCat) ; $i++) { ?>
			<li><img src="images/separador.png" alt="">
				<a href="<?php echo strtolower($getCat[$i]['name_cat']); ?>" alt="<?php echo $getCat[$i]['name_cat']; ?>" title="<?php echo $getCat[$i]['name_cat']; ?>">
					<?php echo $getCat[$i]["name_cat"]; ?>
				</a>
			</li>
		<?php }	?>
		</ul>	
		<?php }

?>
