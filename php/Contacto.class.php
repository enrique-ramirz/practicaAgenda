<?php 
class Contacto extends MySQL{
	private $nombre; 
	private $email;
        private $Telefono;
        private $Web;
        private $Fecha_de_nacimiento;
        private $Sexo;
        private $Comentarios;
        private $Tipo;
        private $Foto;
        private $Estado;
        
	public function consulta_contactos(){
		$consulta = $this->consulta("SELECT * FROM contactos;");
		if($this->num_rows($consulta)>0){
			$contactos = array();
			while($resultados = $this->fetch_array($consulta)){
				$contactos[] = $resultados; 
			}
		}
		return $contactos;
	}
	
	public function guarda(){
		$this->mysql_insert('contactos',
                    array(
                              'id_contacto'=>'NULL',
                              'Nombre'=>$this->nombre,
                              'Telefono'=>$this->Telefono, 
                              'E-mail'=>$this->email,
                              'Web'=>$this->Web,
                              'Fecha_de_nacimiento'=>$this->Fecha_de_nacimiento,
                              'Sexo'=>$this->Sexo,
                              'Comentarios'=>$this->Comentarios,
                              'Tipo'=>$this->Tipo,
                              'Foto'=>$this->Foto,
                              'Estado'=>$this->Estado
                            )
                );
	}
	
	public function get_nombre(){
		return $this->nombre;
	}
	public function get_email(){
		return $this->email;
	}
	public function get_Telefono(){
		return $this->Telefono;
	}
        public function get_Web(){
		return $this->Web;
	}
        public function get_Fecha_de_nacimiento(){
		return $this->Fecha_de_nacimiento;
	}
        public function get_Sexo(){
		return $this->Sexo;
	}
        public function get_Comentarios(){
		return $this->Comentarios;
	}
        public function get_Tipo(){
		return $this->Tipo;
	}
        public function get_Foto(){
		return $this->Foto;
	}
        public function get_Estado(){
		return $this->Estado;
	}
        
        public function set_nombre($valor){
		$this->nombre = $valor;
	}
        
	public function set_Telefono($valor){
		$this->Telefono = $valor;
	}
	public function set_Web($valor){
		$this->Web = $valor;
	}
        public function set_Fecha_de_nacimiento($valor){
		$this->Fecha_de_nacimiento = $valor;
	}
        public function set_Sexo($valor){
		$this->Sexo = $valor;
	}
        public function set_Comentarios($valor){
		$this->Comentarios = $valor;
	}
        public function set_Tipo($valor){
		$this->Tipo = $valor;
	}
        public function set_email($valor){
		$this->email = $valor;
	}
        public function set_Foto($valor){
		$this->Foto = $valor;
	}
        public function set_Estado($valor){
		$this->Estado = $valor;
	}
  
	
}