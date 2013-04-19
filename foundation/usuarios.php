<!DOCTYPE html>
<!--[if IE 8]> 				 
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Agenda </title>

  <link rel="stylesheet" href="css/normalize.css" />
  
  <link rel="stylesheet" href="css/foundation.css" />
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="row">
		<div class="large-12 columns">
			<h2>Practica Agenda</h2>
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
			<h3>lista de usuarios</h3>
			<?php
				include("../php/Mysql.class.php");
				include("../php/Usuario.class.php");
				
				$Usuario = new Usuario();
				
				$Usuario->set_nombre($_POST['nombre']);
				$Usuario->set_email($_POST['email']);
				$Usuario->set_password($_POST['password']);
				$Usuario->set_valido($_POST['valido']);
                                
				if(isset($_POST['nombre'])){
					$Usuario->guarda();
				}

				
				$usuarios = $Usuario->consulta_datos();
			?>
			
		
		<?php 
		$numero_registros = $Usuario->num_rows($Usuario->consulta("SELECT * FROM  `usuario` "));
		if($numero_registros > 0){
			foreach($usuarios as $row){ ?>
				<div data-alert class="row alert-box secondary">
						
					<div class="large-6 columns">
						<div class="panel">
							<p><?php echo $row['nombre']; ?></p>
							<p><?php echo $row['email']; ?></p>
							<p><?php echo $row['password']; ?></p>
						</div>
					</div>
								
					<a href="#" class="close">&times;</a>
				</div>
			<?php }
		}else{
			echo "No hay registros en la tabla";
		}		
		?>
						
			
		<h1>POST</h1>	
		<pre>	
		<?php
		
			print_r($_POST);
			
			
			
		?>
		</pre>
			
		
			


			  
		</div>

		<div class="large-4 columns">
			
			<div class="panel">
				<h4>formulario</h4>
				<p>.......</p>
				<?php 
					include('../formularios/_form_usuarios.php')
				?>
			</div>
		</div>
	</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
