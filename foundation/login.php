<?php 
session_start(); 
			
include("../php/Mysql.class.php");
include("../php/login.class.php");

$login = new login();
if( isset($_POST['usuario'])){
	$login->set_email($_POST['usuario']);
	$login->set_password($_POST['password']);
	if($login->consultar_usuario()){
		$login->inicia_session($_POST['usuario']);
		
	}else{
		echo "<h1>Usuario incorrecto</h1>";
	}
}
				

?>

<!DOCTYPE html>
<!--[if IE 8]> 				 
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>login </title>

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
			<h3>login</h3>
			
		</div>

		<div class="large-4 columns">
			
			<div class="panel">
				<h4>formulario</h4>
				
				<?php 
					include('../formularios/_form_login.php')
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
