<?php
	if((isset($_POST['torneo_nombre'])) && (isset($_POST['torneo_lugar'])) && (isset($_POST['torneo_num_canchas'])) && (isset($_POST['torneo_num_jugadores'])) && (isset($_POST['torneo_fecha_inicio_dia']))  && (isset($_POST['torneo_num_jugadores'])) && (isset($_POST['torneo_fecha_inicio_mes']))  && (isset($_POST['torneo_num_jugadores'])) && (isset($_POST['torneo_fecha_inicio_anio'])) && (isset($_POST['torneo_fecha_fin_dia'])) && (isset($_POST['torneo_fecha_fin_mes'])) && (isset($_POST['torneo_fecha_fin_anio']))){
		include("../controlador/fachada.php");
		try{
			$instancia = new fachada();
			$db = $instancia->conect();
			$collection= new MongoCollection($db, 'torneo');
			
			$newUser = array("torneo_lugar" => $_POST['torneo_lugar'], "torneo_nombre" => $_POST['torneo_nombre'], "torneo_num_canchas" => $_POST['torneo_num_canchas'] , "torneo_num_jugadores" => $_POST['torneo_num_jugadores'], "torneo_jugadores_registrados" => 0, "torneo_fecha_inicio_dia" => $_POST['torneo_fecha_inicio_dia'], "torneo_fecha_inicio_mes" => $_POST['torneo_fecha_inicio_mes'], "torneo_fecha_inicio_anio" => $_POST['torneo_fecha_inicio_anio'], "torneo_fecha_fin_dia" => $_POST['torneo_fecha_fin_dia'], "torneo_fecha_fin_mes" => $_POST['torneo_fecha_fin_mes'], "torneo_fecha_fin_anio" => $_POST['torneo_fecha_fin_anio'],"tiene_cronograma" => "no" );
			$collection->insert($newUser);
			header("Location: ../vista/administrador.php");
			exit();
		}catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
			header("Location: ../vista/crearTorneo.php?error=si");

	}
?>
