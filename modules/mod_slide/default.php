<?php 
	function displayslide(){
		
		require_once('gestion/models/slide_model.php');

		$datos= new slide;
		$getSlide = $datos->get_slide();

		if ($getSlide[0]["status_sl"] != 0) { 
      echo "<div id='slides'>";
      for ($i=0; $i < count($getSlide) ; $i++) {      
      $nombre = strtolower($getSlide[$i]["name_sl"]);
      $nombreUrl = str_replace(" ", "-", $nombre);


      $foto = "server/php/files/".$getSlide[$i]["image_sl"];
      $enlace =  $nombreUrl.'-content-'.$getSlide[$i]["enlace_sl"].'.html';
      ?>
      <div>
        <img src="<?php echo $foto; ?>" class="slideImage">
        <div class="infoSlide">
          <div class="slideTitulo">
            <?php if ($getSlide[$i]["enlace_sl"] != '') { ?>
              <a href="<?php echo $enlace; ?>">
                <?php echo $getSlide[$i]["name_sl"]; ?>
              </a>
            <?php }else{ ?>
              <p><?php echo $getSlide[$i]["name_sl"]; ?></p>
            <?php } ?>
                
          </div>        
          <div class="slideDesc">
            <?php if ($getSlide[$i]["enlace_sl"] != '') { ?>
            <a href="<?php echo $enlace; ?>">
              <?php echo $getSlide[$i]["desc_sl"]; ?>
            </a>
            <?php }else{ ?>
              <p><?php echo $getSlide[$i]["desc_sl"]; ?></p>
            <?php } ?>

          </div>
        </div>
      </div>
      <?php 
      }
      echo "</div>"; 
    }
	}
 ?>
