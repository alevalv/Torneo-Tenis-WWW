
<html>
<?php
	if((isset($_POST['_id'])) && (isset($_POST['game1_jugador1']))&& (isset($_POST['game1_jugador2'])) && (isset($_POST['game2_jugador1'])) && (isset($_POST['game2_jugador2'])) && (isset($_POST['game3_jugador1'])) && (isset($_POST['game3_jugador2'])))   {
		include("../controlador/fachada.php");
		try{
			$instancia = new fachada();
			$db = $instancia->conect();
			$collection= new MongoCollection($db, 'partidos_torneos');

            $mongoId = new MongoId($_POST['_id']);
                        
			$newUser = array('$set' => array("game1_jugador1" => $_POST['game1_jugador1'], "game2_jugador1" => $_POST['game2_jugador1'], "game3_jugador1" => $_POST['game3_jugador1'], "game1_jugador2" => $_POST['game1_jugador2'], "game2_jugador2" => $_POST['game2_jugador2'], "game3_jugador2" => $_POST['game3_jugador2'] ));
			$collection->update(array("_id" => $mongoId), $newUser);
			header("Location: ../aplicacion-movil/resultados.php?sussesupdate=si&partidoid={$_POST['_id']}");
			exit();
		}catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		header("Location: ../vista/crearTorneo.php?errorupdate=si");

	}
?>

</html>
