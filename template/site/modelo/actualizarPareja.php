<?php
	if(isset($_POST['jugador_username']) && isset($_POST['jugador_password']) && isset($_POST['jugador_nombre1'])  && isset($_POST['jugador_nombre2']) && isset($_POST['jugador_sexo1']) && isset($_POST['jugador_sexo2']) && isset($_POST['jugador_cedula1']) && isset($_POST['jugador_cedula2'])){
		include("../controlador/fachada.php");
		try{
			$instancia = new fachada();
			$db = $instancia->conect();
			$collection= new MongoCollection($db, 'jugador');
			if($_POST['jugador_password']==""){
				$newUser = array('$set' => array('jugador_cedula1' => $_POST['jugador_cedula1'],'jugador_cedula2'=> $_POST['jugador_cedula2'], 'jugador_username' => $_POST['jugador_username'], 'jugador_nombre1' => $_POST['jugador_nombre1'],'jugador_nombre2' => $_POST['jugador_nombre2'], 'jugador_sexo1' => $_POST['jugador_sexo1'], 'jugador_sexo2' => $_POST['jugador_sexo2']));
			}else{
				$newUser = array('$set' => array('jugador_cedula1' => $_POST['jugador_cedula1'],'jugador_cedula2'=> $_POST['jugador_cedula2'], 'jugador_username' => $_POST['jugador_username'], 'jugador_password' => md5($_POST['jugador_password']),'jugador_nombre1' => $_POST['jugador_nombre1'],'jugador_nombre2' => $_POST['jugador_nombre2'], 'jugador_sexo1' => $_POST['jugador_sexo1'], 'jugador_sexo2' => $_POST['jugador_sexo2']));
			}
			
				
			$collection->update(array("jugador_username" => $_POST['jugador_username']), $newUser, array("upsert" => false));
			header("Location: ../vista/editarPareja.php?sussesinsert=si");
			exit();
		}
		catch (Exception $e) {
			//echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	}
		header("Location: ../vista/editarPareja.php?errorinsert=si");
?>
