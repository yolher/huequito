<?php 

  function displaybuscar(){
    
    require_once('gestion/models/buscador_model.php');

        $datos=new buscador;
        $productos=$datos->get_busqueda();

        for ($i=0; $i <count($productos) ; $i++) {
            $nombre = strtolower($productos[$i]["titulo_ent"]);
            $nombreUrl = str_replace(" ", "-", $nombre);
          ?>
          <div class="prod">
                <div class="descripcion">
                    <p>
                    <?php echo substr(strip_tags($productos[$i]['titulo_ent']),0,60).'...'; ?>
                    </p>
                </div>
                <div class="imagen">
                     <a href="<?php echo $nombreUrl.'-content-'.$productos[$i]["id_entry"].'.html'; ?>" alt="<?php echo $productos[$i]['titulo_ent']; ?>" title="<?php echo $productos[$i]['titulo_ent']; ?>">
                        <img src="server/php/files/<?php echo $productos[$i]['image_ent']; ?>" alt="">
                    </a>
                </div>
                <div class="readMore">
                    <a href="<?php echo $nombreUrl.'-content-'.$productos[$i]["id_entry"].'.html'; ?>" alt="<?php echo $productos[$i]['titulo_ent']; ?>" title="<?php echo $productos[$i]['titulo_ent']; ?>">
                        Ver Producto
                    </a>
                </div>
                
            </div>
        <?php }
    }
  

 ?>
