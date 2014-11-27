<?php 
	function displayslide(){
		
		require_once('gestion/models/slide_model.php');

		$datos= new slide;
		$getSlide = $datos->get_slide();

		 if ($getSlide[0]["status_sl"] != 0) {        

          $carpeta = "server/php/files/".$getSlide[0]["image_sl"];

          $filehandle = opendir($carpeta); // Abrir archivos
            echo "<div id='slides'>";
              while ($file = readdir($filehandle)) {
                      if ($file != "." && $file != ".." && $file != "." && $file != "Thumbs.db") {
                        $tamanyo = GetImageSize($carpeta .'/'. $file); 
                        $foto = $carpeta .'/'. $file;
                        echo $imagen="<img src='".$foto."'>";  
                        //echo $imagen="<li><a href='".$foto."'><img src='".$foto."'></a></li>";  
                      } 
              } 
              closedir($filehandle); // Fin lectura archivos  
            echo "</div>";         
          }

      }
	

 ?>
