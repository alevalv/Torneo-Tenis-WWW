<?php
	if(isset($_POST['jugador_codigo']) && isset($_POST['jugador_username']) && isset($_POST['jugador_password']) && isset($_POST['jugador_nombre']) && isset($_POST['jugador_sexo']) && isset($_POST['jugador_categoria']) ){
		include("fachada.php");
		$instancia = new fachada();
		$db = $instancia->conect();
		$jugadorCollection = $db->jugador;
		$newUser = array("jugador_codigo" => $_POST['jugador_codigo'], "jugador_username" => $_POST['jugador_username'], "jugador_password" => $_POST['jugador_password'], "jugador_es_pareja" => false,"jugador_nombre1" => $_POST['jugador_nombre'], "jugador_sexo1" => $_POST['jugador_sexo'], "jugador_categoria" => $_POST['jugador_categoria'], "jugador_ranking" => 1});
		$jugadorCollection->insert($newUser);
	}
	//echo $_POST['jugador_codigo'];
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
