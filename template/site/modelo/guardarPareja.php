<?php
	if(isset($_POST['jugador_username']) && isset($_POST['jugador_password']) && isset($_POST['jugador_nombre1'])  && isset($_POST['jugador_nombre2']) && isset($_POST['jugador_sexo1']) && isset($_POST['jugador_sexo2']) && isset($_POST['jugador_categoria']) && isset($_POST['jugador_cedula1']) && isset($_POST['jugador_cedula2'])){
		include("../controlador/fachada.php");
		try{
		$instancia = new fachada();
		$db = $instancia->conect();
		$collection= new MongoCollection($db, 'jugador');
		$jugadorCategoriaModalidad=0;
		if($_POST['jugador_categoria'] == "Novato"){
			$jugadorCategoriaModalidad=11;
		}
		else if($_POST['jugador_categoria'] == "Categoria 1"){
			$jugadorCategoriaModalidad=12;
		}
		else if($_POST['jugador_categoria'] == "Categoria 2"){
			$jugadorCategoriaModalidad=13;
		}
		else if($_POST['jugador_categoria'] == "Categoria 3"){
			$jugadorCategoriaModalidad=14;
		}
		else if($_POST['jugador_categoria'] == "Categoria 4"){
			$jugadorCategoriaModalidad=15;
		}
		$newUser = array('jugador_cedula1' => $_POST['jugador_cedula1'],'jugador_cedula2'=> $_POST['jugador_cedula2'], 'jugador_username' => $_POST['jugador_username'], 'jugador_password' => $_POST['jugador_password'],'jugador_es_pareja' => true,'jugador_nombre1' => $_POST['jugador_nombre1'],'jugador_nombre2' => $_POST['jugador_nombre2'], 'jugador_sexo1' => $_POST['jugador_sexo1'], 'jugador_sexo2' => $_POST['jugador_sexo2'], 'idcategoria_modalidad' => $jugadorCategoriaModalidad,'jugador_ranking' => 1);
		$collection->insert($newUser);
		header("Location: ../vista/index.php");
		exit();
		}
		catch (Exception $e) {
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
	header("Location: ../vista/registrarPareja.php?errorusuario=si");
?>
