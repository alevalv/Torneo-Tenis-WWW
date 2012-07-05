<?php include ("../controlador/seguridad.php");
	comprobarSesion("aplicacion-movil/partido.php");
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
    </head>
    <body>
  <!-- seleccionpartido -->
        <div data-role="page" id="page2">
            <div data-theme="a" data-role="header">
                <h3>
                    Torneo Tenis
                </h3>
            </div>
            <div id="partido" data-role="content" style="padding: 15px">
                <form action="resultados.php" method="get">
                    <h2>
                        Seleccionar Partido
                    </h2>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="partidoid">
                                Codigo Partido:
                            </label>
                            <input id="partidoid" name="partidoid" type="text" required />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain" >
						<input value="Enviar" type="submit" />
                    </div>
                </form>
                <a data-role="button" data-transition="fade" href="../controlador/salir.php">
                        Salir
                </a>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>
