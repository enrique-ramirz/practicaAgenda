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

</head>
<body>

	<div class="row" >
		<div class="large-12 columns">
			<h2>Practica ajax</h2>
                        
                        <div id="lista_contactos">
                                <div class="large-4 columns panel">
                                        mensaje
                                </div>
                                <div class="large-4 columns panel">
                                        mensaje
                                </div>
                            <div class="large-4 columns panel">
                                        mensaje
                                </div>
                            <div class="large-4 columns panel">
                                        mensaje
                                </div>
                        </div>
		</div>
	</div>
  <script src="js/foundation.min.js"></script>
 
  <script>
    $(document).foundation();
    
    $(document).ready(function() {
        
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

    
  </script>
</body>
</html>
