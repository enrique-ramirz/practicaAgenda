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
}	