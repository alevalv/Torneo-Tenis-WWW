
<html>
<?php
	if((isset($_POST['torneo_id'])) && (isset($_POST['torneo_nombre'])) && (isset($_POST['torneo_lugar'])) && (isset($_POST['torneo_num_canchas']))&& (isset($_POST['torneo_fecha_inicio'])) )   {
		include("../controlador/fachada.php");
		try{
			$instancia = new fachada();
			$db = $instancia->conect();
			$collection= new MongoCollection($db, 'torneo');
			$date = explode('-',$_POST['torneo_fecha_inicio']);
            $anio= (int) $date[0];
            $mes= (int) $date[1];
            $dia =(int) $date[2];
            $mongoId = new MongoId($_POST['torneo_id']);
                        
			$newUser = array("_id" => $mongoId,"torneo_lugar" => $_POST['torneo_lugar'], "torneo_nombre" => $_POST['torneo_nombre'], "torneo_num_canchas" => $_POST['torneo_num_canchas'] , 
                            "torneo_num_jugadores" => $_POST['torneo_num_jugadores'], "torneo_fecha_inicio_dia" => $dia, "torneo_fecha_inicio_mes" => $mes,
                            "torneo_fecha_inicio_anio" => $anio,
                            "tiene_cronograma" => "no" );
			$collection->update(array("_id" => $mongoId), $newUser);
			header("Location: ../vista/editarTorneo.php?sussesinsert=si");
			exit();
		}catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
			//header("Location: ../vista/crearTorneo.php?errorinsert=si");

	}
?>

</html>
