<?php
	if(isset($_POST['jugador_codigo']) && isset($_POST['jugador_username']) && isset($_POST['jugador_password']) && isset($_POST['jugador_nombre']) && isset($_POST['jugador_sexo'])){
		include("../controlador/fachada.php");
		try{
		$instancia = new fachada();
		$db = $instancia->conect();
		$collection= new MongoCollection($db, 'jugador');
		$newUser = array("jugador_codigo" => $_POST['jugador_codigo'], "jugador_username" => $_POST['jugador_username'], "jugador_password" => $_POST['jugador_password'], "jugador_nombre1" => $_POST['jugador_nombre'], "jugador_sexo1" => $_POST['jugador_sexo']);
			
		//$collection->update(array("jugador_codigo" => $_POST['jugador_codigo']), array("set" => $newUser), array("upsert" => false));
		header("Location: ../vista/editarJugador.php?sussesinsert=si");
		exit();
		}
		catch (Exception $e) {
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
		header("Location: ../vista/editarjugador.php?errorinsert=si");

?>
