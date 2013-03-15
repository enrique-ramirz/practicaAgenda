<?php 
class Mysql{

	private $conexion;
		
	function __construct(){
		if(!isset($this->conexion)){
		$this->conexion = (mysql_connect("localhost","root","")) 
			or die(mysql_error() );

		 mysql_select_db("agenda",$this->conexion)
		 or die(mysql_error()  );
			
		}
	}

	public function consulta($consulta){
		$resultado = mysql_query($consulta,$this->conexion);
		if(!$resultado){
			echo "Error en la consulta: ".mysql_error();
		}
		return $resultado;
	}
	
	public function fetch_array($consulta){
		return mysql_fetch_array($consulta);
	}
	
	public function num_rows($consulta){
		return mysql_num_rows($consulta);
	}
	

}

?>