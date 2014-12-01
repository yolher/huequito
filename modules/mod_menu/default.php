<?php 
	require_once("gestion/models/conexion_model.php");

	function loop_array($array = array(), $parent_id = 0){
		if(!empty($array[$parent_id])){
			echo "<ul>";
				foreach($array[$parent_id] as $items){
					echo "<li><img src='images/separador.png'>";
					echo '<a href="'.$items['aliasUrl'].'" alt="'.$items['nombre_menu'].'" title="'.$items['nombre_menu'].'">'.$items['nombre_menu'].'</a>';
					loop_array($array,$items['id_menu']);
					echo "</li>";
				}
			echo "</ul>";
		}
	}

	function displayMenus(){
		$sql = "select * from do_menu";
		$res = mysqli_query(Conectar::con(),$sql);
		$array = array();
		while($rows = mysqli_fetch_assoc($res)){
			$array[$rows['id_parent']][] = $rows;
		}
		loop_array($array);
	}

?>
