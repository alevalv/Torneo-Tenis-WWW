<?php include ("../controlador/seguridad.php");
	comprobarSesion("aplicacion-movil/resultados.php");
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
                <form action="">
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
                                    <label for="textinput11">
                                    </label>
                                    <input id="textinput11" placeholder="" value="" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-c">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <label for="textinput12">
                                    </label>
                                    <input id="textinput12" placeholder="" value="" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-d">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <label for="textinput13">
                                    </label>
                                    <input id="textinput13" placeholder="" value="" type="number" />
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
                                    <label for="textinput14">
                                    </label>
                                    <input id="textinput14" placeholder="" value="" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-c">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <label for="textinput15">
                                    </label>
                                    <input id="textinput15" placeholder="" value="" type="number" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="ui-block-d">
                            <div data-role="fieldcontain">
                                <fieldset data-role="controlgroup" data-mini="true">
                                    <label for="textinput17">
                                    </label>
                                    <input id="textinput17" placeholder="" value="" type="number" />
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <a data-role="button" data-transition="fade" href="#">
                        Actualizar
                    </a>
                </form>
            </div>
        </div>
    
        <script>
            //App custom javascript
        </script>
    </body>
</html>
