	<form action="index.html" method="GET">
		
		<div class="row">
			<label for="nombre">Nombre:</label><br/>
			<input type="text" name="nombre" id="nombre" required autofocus>
		</div>
		
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