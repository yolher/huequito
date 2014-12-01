<?php 
	function displayUltimo(){
		
		require_once('gestion/models/noticias_model.php');

        $datos=new noticias;
        $productos=$datos->get_noticias_dif_cat(2,3,5,4);      
        

        for ($i=0; $i < count($productos); $i++) {
            $nombre = strtolower($productos[$i]["titulo_ent"]);
            $nombreUrl = str_replace(" ", "-", $nombre);
          ?>   
            <div class="grid1">
                <div id="imgultimos">
                    <a href="<?php echo $nombreUrl.'-content-'.$productos[$i]["id_entry"].'.html'; ?>" alt="<?php echo $productos[$i]['titulo_ent']; ?>" title="<?php echo $productos[$i]['titulo_ent']; ?>">
                        <img src="server/php/files/<?php echo $productos[$i]['image_ent']; ?>" alt="">
                    </a>
                </div>
                <div id="desultimos">
                    <p>
                    <?php echo substr(strip_tags($productos[$i]['titulo_ent']),0,60).'...'; ?>
                    </p>
                </div>
            </div>                
        <?php }
    }
	

 ?>


    
   