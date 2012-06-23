<?php
	if(isset($_POST['jugador_codigo']) && isset($_POST['jugador_username']) && isset($_POST['jugador_password']) && isset($_POST['jugador_nombre']) && isset($_POST['jugador_sexo']) && isset($_POST['jugador_categoria']) ){
		include("../controlador/fachada.php");
		//include("../controlador/ValidadorUsername.php");
		try{
			$instancia = new fachada();
			$db = $instancia->conect();
			$collection= new MongoCollection($db, 'jugador');
			//echo ValidadorUsername::validar($_POST['jugador_username']);
			$jugadorCategoriaModalidad=0;
			if($_POST['jugador_sexo'] == "M" && $_POST['jugador_categoria'] == "Novato"){
				$jugadorCategoriaModalidad=1;
			}
			else if($_POST['jugador_sexo'] == "M" && $_POST['jugador_categoria'] == "Categoria 1"){
				$jugadorCategoriaModalidad=2;
			}
			else if($_POST['jugador_sexo'] == "M" && $_POST['jugador_categoria'] == "Categoria 2"){
				$jugadorCategoriaModalidad=3;
			}
			else if($_POST['jugador_sexo'] == "M" && $_POST['jugador_categoria'] == "Categoria 3"){
				$jugadorCategoriaModalidad=4;
			}
			else if($_POST['jugador_sexo'] == "M" && $_POST['jugador_categoria'] == "Categoria 4"){
				$jugadorCategoriaModalidad=5;
			}
			else if($_POST['jugador_sexo'] == "F" && $_POST['jugador_categoria'] == "Novato"){
				$jugadorCategoriaModalidad=6;
			}
			else if($_POST['jugador_sexo'] == "F" && $_POST['jugador_categoria'] == "Categoria 1"){
				$jugadorCategoriaModalidad=7;
			}
			else if($_POST['jugador_sexo'] == "F" && $_POST['jugador_categoria'] == "Categoria 2"){
				$jugadorCategoriaModalidad=8;
			}
			else if($_POST['jugador_sexo'] == "F" && $_POST['jugador_categoria'] == "Categoria 3"){
				$jugadorCategoriaModalidad=9;
			}
			else if($_POST['jugador_sexo'] == "F" && $_POST['jugador_categoria'] == "Categoria 4"){
				$jugadorCategoriaModalidad=10;
			}
			echo $jugadorCategoriaModalidad;
			//$newUser = array("jugador_codigo" => $_POST['jugador_codigo'], "jugador_username" => $_POST['jugador_username'], "jugador_password" => $_POST['jugador_password'], "jugador_es_pareja" => false,"jugador_nombre1" => $_POST['jugador_nombre'], "jugador_sexo1" => $_POST['jugador_sexo'], "jugador_categoria" => $_POST['jugador_categoria'], "jugador_ranking" => 1);
			//$collection->insert($newUser);
			//header("Location: ../vista/index.php");
			//exit();
		}
		catch (Exception $e) {
			//echo 'Caught exception: ',  $e->getMessage(), "\n";			
		}
		
	}
	//header("Location: ../vista/registrarJugador.php?errorusuario=si");
?>
