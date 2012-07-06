<?php
	if(isset($_POST['juez_codigo']) && isset($_POST['juez_nombre']) && isset($_POST['juez_username']) && isset($_POST['juez_password']) && isset($_POST['juez_fecha_nacimiento'])){
		include("../controlador/fachada.php");
		try{
			$instancia = new fachada();
			$db = $instancia->conect();
			$collection= new MongoCollection($db, 'juez');
			$newUser = array('$set' => array("juez_codigo" => $_POST['juez_codigo'], "juez_username" => $_POST['juez_username'], "juez_password" => $_POST['juez_password'], "juez_nombre" => $_POST['juez_nombre'],"juez_fecha_nacimiento" => $_POST['juez_fecha_nacimiento']));
			$collection->update(array("juez_codigo" => $_POST['juez_codigo']), $newUser, array("upsert" => false));
			header("Location: ../vista/editarJuez.php?sussesinsert=si");
			exit();
		}
		catch (Exception $e) {
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
		header("Location: ../vista/editarJuez.php?errorinsert=si");

?>
