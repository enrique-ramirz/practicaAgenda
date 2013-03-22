<?php 
class Contacto extends MySQL{
	private $nombre; 
	private $email;
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
								  'Nombre'=>'nombre '.$this->nombre,
								  'E-mail'=>'email'.$this->email,
								  'Telefono'=>'email', 
		                          'E-mail'=>'email',
								  'Web'=>'email',
								  'Fecha de nacimiento'=>'2013-03-29',
								  'Sexo'=>'email',
								  'Comentarios'=>'email',
								  'Tipo'=>'email',
								  'Foto'=>'email',
								  'Estado'=>'email'

								)
						   );
	}
	
	public function get_nombre(){
		return $this->nombre;
	}
	
	public function get_email(){
		return $this->email;
	}
	
	public function set_nombre($valor){
		$this->nombre = $valor;
	}
	
	public function set_email($valor){
		$this->email = $valor;
	}
	
}