<?php 

require_once("conexion_model.php");

class buscador{
	

	private $buscarall = array();
	public function get_busqueda(){
		$sql = "select * from do_entry  where titulo_ent like '%".$buscar."%' ";		
		$res = mysqli_query(Conectar::con(),$sql);
		if (mysqli_num_rows($res) != 0) {
			while($reg = mysqli_fetch_assoc($res)){
			$this->buscarall[] = $reg;
			}
			return $this->buscarall;
		}//else{
			//echo "<script type='text/javascript'>window.location='../sorry.php';</script>";}		
	}

	


}

?>
