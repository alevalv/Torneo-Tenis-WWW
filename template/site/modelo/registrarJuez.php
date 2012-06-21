<?php
	if(isset($_POST['juez_codigo']) && isset($_POST['juez_nombre']) && isset($_POST['juez_username']) && isset($_POST['juez_password']) && isset($_POST['juez_fecha_nacimiento'])){
		include("../controlador/fachada.php");
		try{
		$instancia = new fachada();
		$db = $instancia->conect();
		$collection= new MongoCollection($db, 'juez');
		$newUser = array("juez_codigo" => $_POST['juez_codigo'], "juez_username" => $_POST['juez_username'], "juez_password" => $_POST['juez_password'], "juez_nombre" => $_POST['juez_nombre'],"juez_fecha_nacimiento" => $_POST['juez_fecha_nacimiento']);
		$collection->insert($newUser);
		header("Location: ../vista/index.php");
		exit();
		}
		catch (Exception $e) {
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
		header("Location: ../vista/ingresarJuez.php?errorusuario=si");

?>
