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
	
	
	public function mysql_insert($tabla,$inserts){
	
	    $values = array_values($inserts);
		$keys = array_keys($inserts);
		
		$sql = 'INSERT INTO `'.$tabla.'` 
		(`'.implode('`,`', $keys).'`) VALUES 
		(\''.implode('\',\'', $values).'\')';
				
		return mysql_query($sql) or die("error al guardar");
		
	}
	
	public function fetch_array($consulta){
		return mysql_fetch_array($consulta);
	}
	
	public function num_rows($consulta){
		return mysql_num_rows($consulta);
	}
	

}

?>