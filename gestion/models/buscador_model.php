<?php 

require_once("conexion_model.php");

class buscador{
	

	private $buscarAll = array();
	public function get_busqueda($buscar){
		$sql = "select * from do_entry  where titulo_ent like '%".$buscar."%' ";		
		$res = mysqli_query(Conectar::con(),$sql);
		if (mysqli_num_rows($res) != 0) {
			while($reg = mysqli_fetch_assoc($res)){
			$this->buscarAll[] = $reg;
			}
			return $this->buscarAll;
		}//else{
			//echo "<script type='text/javascript'>window.location='../sorry.php';</script>";}		
	}
}

?>
