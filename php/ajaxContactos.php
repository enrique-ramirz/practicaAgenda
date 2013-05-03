<?php
	include("../php/Mysql.class.php");
	include("../php/Contacto.class.php");
	$Contacto = new Contacto();
	$contactos = $Contacto->consulta_sql("select * 
		from `contactos`
		where id_contacto > '".$_GET['numreg']."'; ");
	
	$numero_registros = $Contacto->num_rows($Contacto->consulta("select * 
		from `contactos`
		where id_contacto > '".$_GET['numreg']."'; "));
		
	if($numero_registros > 0){
	foreach($contactos as $row){ 
?>
		<div class="large-4 columns panel">
			<h2><?php echo $row['Nombre']; ?></h2>
		</div>
<?php 
		}
	}
?>