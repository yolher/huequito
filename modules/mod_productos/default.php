<?php 
	function displayProductos(){
		
		require_once('gestion/models/noticias_model.php');

        $datos=new noticias;
        $productos=$datos->get_noticias_cat(2);

        for ($i=0; $i <count($productos) ; $i++) {  ?>
          <div class="prod">
                <div class="imagen">
                    <a href="">
                        <img src="server/php/files/<?php echo $productos[$i]['image_ent']; ?>" alt="">
                    </a>
                </div>
                <div class="descripcion">
                    <p>
                    <?php echo substr(strip_tags($productos[$i]['desc_ent']),0,60).'...'; ?>
                    </p>
                </div>
            </div>
        <?php }
    }
	

 ?>