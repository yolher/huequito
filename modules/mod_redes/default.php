<?php 
	require_once("gestion/models/redes_model.php");

	function displayRedes(){
		$datos = new redes;
		$getRedes = $datos->get_all_redes(); ?>
		<ul>
		<?php for ($i=0; $i <count($getRedes) ; $i++) {
			$nombre = strtolower($getRedes[$i]["nombre_redes"]);
		?>
			<li>
				<a href="<?php echo strtolower($getRedes[$i]['url_redes']); ?>" alt="<?php echo $getRedes[$i]['nombre_redes']; ?>" title="<?php echo $getRedes[$i]['nombre_redes']; ?>" target="_blank">
					<img src="images/<?php echo $nombre; ?>.png " alt="">
					<p><?php  echo $getRedes[$i]['nombre_redes']; ?></p>
				</a>
			</li>
		<?php }	?>
		</ul>	
		<?php }

?>
