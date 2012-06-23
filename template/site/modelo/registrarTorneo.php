<?php
	if(isset($_POST['torneo_nombre']) && isset($_POST['torneo_lugar']) && isset($_POST['torneo_num_canchas']) && isset($_POST['torneo_num_jugadores']) && isset($_POST['torneo_fecha_inicio']) && isset($_POST['torneo_fecha_fin'])){
		include("../controlador/fachada.php");
		try{
		$instancia = new fachada();
		$db = $instancia->conect();
		$collection= new MongoCollection($db, 'torneo');
		
		$codigos = $collection->find()->sort({'torneo_codigo' : -1});
		
		$t_codigo = $codigos->current();
		
		
		$newUser = array("torneo_codigo" => $t_codigo['torneo_codigo'], "torneo_lugar" => $_POST['torneo_lugar'], "torneo_nombre" => $_POST['torneo_nombre'], "torneo_num_canchas" => $_POST['torneo_num_canchas'] , "torneo_num_jugadores" => $_POST['torneo_num_jugadores'], "torneo_jugadores_registrados" => 0, "torneo_fecha_inicio" => $_POST['torneo_fecha_inicio'], "torneo_fecha_fin" => $_POST['torneo_fecha_fin']);
		$collection->insert($newUser);
		header("Location: ../vista/index.php");
		exit();
		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
			header("Location: ../vista/registrarPareja.php?errorusuario=si");

	}
?>
