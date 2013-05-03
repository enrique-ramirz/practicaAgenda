<?php 
class login extends MySQL{
	public $email;
	public $password;
	public $nombre_tabla = "usuario";
                

	
	public function consultar_usuario(){
				
		$consulta = mysql_query("SELECT password FROM
		".$this->nombre_tabla." where email = '".$this->email."' ");
					
		if($this->num_rows($consulta)>0){
			
				$datos = array();
				while($resultados = $this->fetch_array($consulta)){
					$datos[] = $resultados; 
				}
								
			if($datos[0]['password'] == md5($this->password)){
				return true;
			}
		}else{
			return false;
		}
		return false;
	}
	
	public function inicia_session($usuario){
		$_SESSION['usuario'] = $usuario;
		header('Location: usuarios.php');
		exit();
	}
	
	public function cerrar_session($usuario){
		unset($_SESSION);
		session_destroy();
		
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