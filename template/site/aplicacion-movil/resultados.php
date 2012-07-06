<?php include ("../controlador/seguridad.php");
	comprobarSesion("aplicacion-movil/resultados.php");
	include("../modelo/consultarPartido.php");
	$data = consultarPartido($_GET['partidoid'], $_SESSION['juez_codigo']);
?><!DOCTYPE html>
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
        
        <!-- Puntajes -->
        <div data-role="page" id="page3">
            <div data-theme="a" data-role="header">
                <h3>
                    Torneo Tenis
                </h3>
            </div>
            <div data-role="content" style="padding: 15px">
                <form action="../modelo/actualizarPartido.php" method="post">
					<?php
							if($_GET["errorupdate"]=="si"){
								echo 	'<div id="errorMensage">
											Error al actualizar el partido
										</div>';
							}else if($_GET["sussesupdate"]=="si"){
								echo 	'<div id="sussesMensage">
											Actualización Correcta
										</div><p><br></p>';
							}
					?>
                    <div class="ui-grid-c">
                        <div class="ui-block-a">
                        </div>
                        <div class="ui-block-b">
                            <h1>
                                1
                            </h1>
                        </div>
                        <div class="ui-block-c">
                            <h1>
                                2
                            </h1>
                        </div>
                        <div class="ui-block-d">
                            <h1>
                                3
                            </h1>
                        </div>
                        <div class="ui-block-a">
                            <h3>
                                Player 1
                            </h3>
                        </div>
                        <div class="ui-block-b">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <input id="game1_jugador1" name="game1_jugador1" placeholder="" value="<?php echo $data['game1_jugador1'] ?>" type="number" required />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-c">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <input id="game2_jugador1" name="game2_jugador1" placeholder="" value="<?php echo $data['game2_jugador1'] ?>" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-d">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <input id="game3_jugador1" name="game3_jugador1" placeholder="" value="<?php echo $data['game3_jugador1'] ?>" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-a">
                            <h3>
                                Player 2
                            </h3>
                        </div>
                        <div class="ui-block-b">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <input id="game1_jugador2" name="game1_jugador2" placeholder="" value="<?php echo $data['game1_jugador2'] ?>" type="number" required />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-c">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <input id="game2_jugador2" name="game2_jugador2" placeholder="" value="<?php echo $data['game2_jugador2'] ?>" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-d">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <input id="game3_jugador2" name="game3_jugador2" placeholder="" value="<?php echo $data['game3_jugador2'] ?>" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <input type="hidden" id="_id" name="_id" value="<?php echo $data['_id']; ?>" />
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
