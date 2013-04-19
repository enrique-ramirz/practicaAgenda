<?php 
class Usuario extends MySQL{
		private $nombre; 
		private $email;
        private $password;
        private $valido;
		private $nombre_tabla = "usuario";
                
	public function consulta_datos(){
		$consulta = $this->consulta("SELECT * FROM ".$this->nombre_tabla);
		if($this->num_rows($consulta)>0){
			$datos = array();
			while($resultados = $this->fetch_array($consulta)){
				$datos[] = $resultados; 
			}
		}
		return $datos;
	}
	
	public function guarda(){

		$this->mysql_insert($this->nombre_tabla,
                    array(
                              'id'=>'NULL',
                              'nombre'=>$this->nombre,
							  'email'=>$this->email,
                              'password'=>$this->password, 
                              'valido'=>$this->valido,
                            )
                );

	}
	
	public function get_nombre(){
		return $this->nombre;
	}
	public function get_email(){
		return $this->email;
	}
	public function get_password(){
		return $this->password;
	}
    public function get_valido(){
		return $this->valido;
	}
       
  
	public function set_nombre($valor){
		$this->nombre = $valor;
	}
	
	public function set_password($valor){
		$this->password = $valor;
	}
	public function set_email($valor){
		$this->email = $valor;
	}
	public function set_valido($valor){
		$this->valido = $valor;
	}
	
    
  
	
}