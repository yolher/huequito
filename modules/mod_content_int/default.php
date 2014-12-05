<?php 
	function displayInfoInternal($id){
		require_once("gestion/models/noticias_model.php");
				
		$datos = new noticias;
		$intems = $datos->get_noticias_id($id);

		
		?>
		<script src="modules/mod_content_int/js/lytebox.js"></script>
		<link href="modules/mod_content_int/css/lytebox.css" rel="stylesheet" />
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
			<?php 

			if($intems[0]["gallery_ent"] != "null"){ ?>
			<div id="galerias">
				
				<?php 
				  $carpeta = "server/php/files/".$intems[0]["gallery_ent"];

		          $filehandle = opendir($carpeta); // Abrir archivos
		            echo "<ul>";
		              while ($file = readdir($filehandle)) {
		                      if ($file != "." && $file != ".." && $file != "." && $file != "Thumbs.db") {
		                        $tamanyo = GetImageSize($carpeta .'/'. $file); 
		                        $foto = $carpeta .'/'. $file;
		                        //echo $imagen="<img src='".$foto."'>";
		                        echo $imagen='<li><a href="'.$foto.'" class="lytebox" data-lyte-options="group:vacation"><img src="'.$foto.'" /></a></li>';
		                        //echo $imagen="<li><a href='".$foto."'><img src='".$foto."'></a></li>";  
		                      } 
		              } 
		              closedir($filehandle); // Fin lectura archivos  
		            echo "</ul>";
		         ?>

		    </div>
			<?php } ?>
			
		</div>
		<?php	
	}

 ?>