<?php
 include("fachada.php");
 $instancia = new fachada();
 $db = $instancia->conect();
 $colection = $db->jugador;
 if($_POST){
	 $usr = {jugador_username = $_POST['username'] , jugador_password = $_POST['password']};
	 $result = $colection->find($usr);
	 if($result){//el usuario existe
		session_start();
		$_SESSION["autentificado"]= "SI";
		//header ("Location: aplicacion.php");
		echo	'<p>
					El usuario existe
				</p>'
		 
	 else{
		//'<p>
			//El usuario NO existe
		 //</p>'
		 header("Location: index.php?errorusuario=si"); 
	}
 }
 

?> 	
