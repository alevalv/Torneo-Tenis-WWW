<?php 
 if(isset($_POST['username']) && isset($_POST['password'])){
	 include("../controlador/fachada.php");
     $instancia = new fachada();
	 $db = $instancia->conect();
	 
			$colection_Juez = $db->juez;
			$usr_Juez = array("juez_username" => $_POST['username'] , "juez_password" => $_POST['password']);
			$result_Juez = $colection_Juez->find($usr_Juez);
			
			if($result_Juez->count()!=0){
				session_start();
				$_SESSION["autentificado"]= "si";
				$_SESSION["username"]= $_POST['username'];
				$_SESSION["rol"]= "juezmovil";
				header ("Location: ../aplicacion-movil/partido.php");
				
				exit();
			}else{				
				header("Location: ../aplicacion-movil/index.php?errorusuario=si");				
			}
}

?>
