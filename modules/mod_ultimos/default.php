<?php 
	function displayUltimo(){
		
		require_once('gestion/models/noticias_model.php');

        $datos=new noticias;
        $productos=$datos->get_noticias_cat(2);

        for ($i=0; $i <4 ; $i++) {  ?>
          
                <div id="imgultimos">
                    <a href="">
                        <img src="server/php/files/<?php echo $productos[$i]['image_ent']; ?>" alt="">
                    </a>
                </div>
                <div id="desultimos">
                    <p>
                    <?php echo substr(strip_tags($productos[$i]['titulo_ent']),0,60).'...'; ?>
                    </p>
                </div>
           
        <?php }
    }
	

 ?>


    
   