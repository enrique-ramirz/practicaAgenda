<?php 
class login extends MySQL{
	public $email;
	public $password;
	public $nombre_tabla = "usuario";
                

	
	public function consultar_usuario(){
		echo "clase Login";
		
		echo "SELECT password FROM
		".$this->nombre_tabla." where email = ".$this->email;
		
		$consulta = mysql_query("SELECT password FROM
		".$this->nombre_tabla." where email = '".$this->email."' ");
		
		echo $this->num_rows($consulta);
		
		if($this->num_rows($consulta)>0){
			
				$datos = array();
				while($resultados = $this->fetch_array($consulta)){
					$datos[] = $resultados; 
				}
			
			
			print_r($datos);
			
			if($datos[0]['password'] == md5($this->password)){
				return true;
			}
		}
		return false;
	}
	
	
	

	
	public function get_email(){
		return $this->email;
	}
	public function get_password(){
		return $this->password;
	}
    
	
	public function set_password($valor){
		$this->password = $valor;
	}
	public function set_email($valor){
		$this->email = $valor;
	}

	
    
  
	
}
?>