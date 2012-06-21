<?php
	if(isset($_POST['jugador_username']) && isset($_POST['jugador_password']) && isset($_POST['jugador_nombre1'])  && isset($_POST['jugador_nombre2']) && isset($_POST['jugador_sexo1']) && isset($_POST['jugador_sexo2']) && isset($_POST['jugador_categoria']) && isset($_POST['jugador_cedula1']) && isset($_POST['jugador_cedula2'])){
		include("../controlador/fachada.php");
		try{
		$instancia = new fachada();
		$db = $instancia->conect();
		$collection= new MongoCollection($db, 'jugador');
		db.jugador.insert('jugador_cedula1' => $_POST['jugador_cedula1'],'jugador_cedula2'=> $_POST['jugador_cedula2'], 'jugador_username' => $_POST['jugador_username'], 'jugador_password' => $_POST['jugador_password'],'jugador_es_pareja' => true,'jugador_nombre1' => $_POST['jugador_nombre1'],'jugador_nombre2' => $_POST['jugador_nombre2'], 'jugador_sexo1' => $_POST['jugador_sexo1'], 'jugador_sexo2' => $_POST['jugador_sexo2'], 'jugador_categoria' => $_POST['jugador_categoria'],'jugador_ranking' => 1);
		$newUser = array("jugador_codigo" => $_POST['jugador_codigo'], "jugador_username" => $_POST['jugador_username'], "jugador_password" => $_POST['jugador_password'], "jugador_es_pareja" => false,"jugador_nombre1" => $_POST['jugador_nombre'], "jugador_sexo1" => $_POST['jugador_sexo'], "jugador_categoria" => $_POST['jugador_categoria'], "jugador_ranking" => 1);
		$collection->insert($newUser);
		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
	echo $_POST['jugador_codigo'];
	//echo "<br />";
	//echo $_POST['jugador_username'];
	//echo "<br />";
	//echo $_POST['jugador_password'];
	//echo "<br />";
	//echo $_POST['jugador_nombre'];
	//echo "<br />";
	//echo $_POST['jugador_sexo'];
	//echo "<br />";
	//echo $_POST['jugador_categoria'];
	//echo "<br />";
?>
