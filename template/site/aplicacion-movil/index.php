<?php include ("../controlador/seguridad.php");
	comprobarSesion("aplicacion-movil/index.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
        <link rel="stylesheet" href="my.css" />

        <style>
            /* App custom styles */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js">
        </script>
        <script>
			/*$("#movil").css("display", "none"); 
			$('#movil').remove();*/</script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    Torneo Tenis
                </h3>
            </div>
            <div data-theme="a" data-role="header">
            </div>
            <div data-role="content" style="padding: 15px">
                <form id="loginJuez" action="../modelo/autenticar.php?movil=si" method="post">
					<?php
							if($_GET["errorusuario"]=="si"){
								echo 	'<div id="errorMensage">
											Nombre de Usuario o Password incorrectos
										</div>';
							}
					?>		
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="username">
                                Username
                            </label>
                            <input id="username" name="username" type="text" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain" >
                        <fieldset data-role="controlgroup">
                            <label for="password">
                                Password
                            </label>
                            <input id="password" name="password" type="password" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain" >
						<input value="Aceptar" type="submit" />
                    </div>
                </form>
            </div>
        </div>
   
        <script>
            //App custom javascript
            
        </script>
    </body>
</html>
