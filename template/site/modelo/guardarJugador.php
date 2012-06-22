<?php
	if(isset($_POST['jugador_codigo']) && isset($_POST['jugador_username']) && isset($_POST['jugador_password']) && isset($_POST['jugador_nombre']) && isset($_POST['jugador_sexo']) && isset($_POST['jugador_categoria']) ){
		include("../controlador/fachada.php");
		include("../controlador/ValidadorUsername.php");
		try{
			$instancia = new fachada();
			$db = $instancia->conect();
			$collection= new MongoCollection($db, 'jugador');
			if(ValidadorUsername::validar($_POST['jugador_username'])){
				echo "sali";
				$newUser = array("jugador_codigo" => $_POST['jugador_codigo'], "jugador_username" => $_POST['jugador_username'], "jugador_password" => $_POST['jugador_password'], "jugador_es_pareja" => false,"jugador_nombre1" => $_POST['jugador_nombre'], "jugador_sexo1" => $_POST['jugador_sexo'], "jugador_categoria" => $_POST['jugador_categoria'], "jugador_ranking" => 1);
				$collection->insert($newUser);
				//header("Location: ../vista/index.php");
				//exit();
			}
			else{
				echo "nope";
				//header("Location: ../vista/registrarJugador.php?errorusuario=si");
			}
		}
		catch (Exception $e) {
			//echo 'Caught exception: ',  $e->getMessage(), "\n";			
		}
		
	}
	header("Location: ../vista/registrarJugador.php?errorusuario=si");
?>
