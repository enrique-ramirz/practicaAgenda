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
  <script src="js/vendor/jquery.js"></script>
	
<?php
		include("../php/Mysql.class.php");
		include("../php/Contacto.class.php");
		$Contacto = new Contacto();
		$contactos = $Contacto->consulta_contactos();
		$numero_registros = $Contacto->num_rows($Contacto->consulta("SELECT * FROM  `contactos` "));
?>
		
</head>
<body>
<div class="row" >
	<div class="large-12 columns">
		<h2>Practica ajax</h2>
     		 <div id="lista_contactos">
		  <?php 
				if($numero_registros > 0){
					foreach($contactos as $row){ ?>
						<div class="large-4 columns panel">
							<h2><?php echo $row['Nombre']; ?></h2>
						</div>
			<?php 
					}
				}
			?>
		 </div>
	</div>
</div>
  <script src="js/foundation.min.js"></script>
 
  <script>
    $(document).foundation();
    
	$(window).load(function () {
      //alert("documento cargado");
    });
	   
	   
    $(document).ready(function() {
			//alert("documento listo");
		
		var numReg = $('#lista_contactos div').size();
			
		setInterval(function(){
						
			$.ajax({
			  type:"POST",
			  url: "../php/ajaxContactos.php?numreg="+numReg,
			  success: function(msg){
				$('#lista_contactos').append(msg); 
				numReg = $('#lista_contactos div').size();
			  }
			});
			
					
			
		},2000);  
		
	});
		
		
		
		/*
		
		
		
		
		 $('#lista_contactos').append(msg); 
		
		
		
        setInterval(function(){
                var num =0;
                $.ajax({
                  type: "POST",
                  url: "../php/ajaxContactos.php?num="+num,

                  success: function(msg){
                    
                      $('#lista_contactos').append(msg); 
                      num ++;
                      $("h2").slideToggle("slow");
                  }
                });

   },1000);  
   });

    */
  </script>
</body>
</html>
