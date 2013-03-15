<!DOCTYPE html>
<html>
	<head> <!-- fffff -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Practica 1</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="header-container">
			<header class="container clear">
				<h1 class="title">h1.title</h1>
				<nav id="menu">
					<ul>
						<li><a href="http://itc.mx">link a itc </a></li>
						<li><a href="http://itc.mx">link a itc </a></li>
						<li><a href="http://itc.mx">link a itc </a></li>
						
					</ul>
				</nav>				
			</header>
		</div>
		
		<div class="main-container">
			<div class="main container clear">
				<article>
					<?php 
						include("php/Mysql.class.php");
						include("php/Contacto.class.php");
						
						$Contacto = new Contacto();
						$contactos = $Contacto->consulta_contactos();
						//print_r($contactos);
							
					?>
					<table border="1">
						<tr>
							<th>Nombre</th>	
							<th>Telefono</th>
							<th>E-mail</th>	
						</tr>
						<?php foreach($contactos as $row){ ?>
							<tr>
								<td><?php echo $row['Nombre']; ?></td>
								<td><?php echo $row['Telefono']; ?></td>
								<td><?php echo $row['E-mail']; ?></td>
							</tr>
						<?php } ?>
						
					</table>
					
				
					<header>
						<h1>article header h1</h1>
						<p>ggg gggg ggg gggg gg</p>
						<img src="img/Dock.jpg" alt="foto del contacto" 
							title="foto"
							width="100">
					</header>
					<section>
						<h2>article section h2</h2>
						<p>ffff fffff fffff ff</p>
					</section>
					<footer>
						<h3>article footer h3</h3>
						<p>fjjjj jjjjj jjjjjj j</p>
					</footer>
				</article>
				<aside>
	<form action="index.html" method="GET">
		<input type="search" name="buscar" id="buscar" 
				placeholder="Buscar.."
				list="lista_contactos">
				
		<datalist id="lista_contactos">
			<option value="Juan"/>
			<option value="Pedro"/>
			<option value="Pablo"/>
		</datalist>
	</form>
				
	<h3>Crear contacto:</h3>
	<form action="index.html" method="GET">
		
		<label for="nombre">Nombre:</label><br/>
		<input type="text" name="nombre" id="nombre" required autofocus>
		<hr />
		<label for="telefono">Telefono:</label><br/>
		<input type="tel" name="telefono" id="telefono" required>
		<hr />
		<label for="email">E-mail:</label><br/>
		<input type="email" name="email" id="email" required>
		<hr />
		<label for="web">Web:</label><br/>
		<input type="url" name="web" id="web" required>
		<hr />
		<label for="fecha_nac">Fecha de nacimiento:</label><br/>
		<input type="date" name="fecha_nac" id="fecha_nac" required>
		<hr />
		<label for="sexo">Sexo:</label><br/>
		<input type="radio" name="sexo" value="F">Femenino<br/>
		<input type="radio" name="sexo" value="M">Masculino<br/>
		<hr />
		<label for="comentarios">Comentarios:</label><br/>
		<textarea name="comentarios" id="comentarios" rows="2" cols="30">
		</textarea>
		<hr />
		<label>Tipo:</label>
		<input type="checkbox" name="amigo">Amigo<br/>
		<input type="checkbox" name="familiar">Familiar<br/>
		<input type="checkbox" name="trabajo">Trabajo<br/>
		<input type="checkbox" name="escuela">Escuela<br/>
		<input type="checkbox" name="lista_negra">Lista negra<br/>
		<hr />
		<label for="foto">Foto:</label>
		<input type="file" id="foto" name="foto">
		<hr />
		<label for="estados">Estado:</label>
		<select name="estados">
			<option>Guanajuato</option>
			<option>México</option>
			<option>Jalisco</option>
			<option>etc</option>
		</select>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<input type="submit" value="enviar">
		
		
	</form>
					
					<p>rrrr rrrr r r r r rrrrrr</p>
					
					
				</aside>
				
			</div>
		</div>
		
		<div class="footer-container">
			<footer class="container">
				<h3>footer h3</h3>
				<p>ddd ddddd ddddd d</p>
			</footer>
		</div>
		
	</body>
</html>







