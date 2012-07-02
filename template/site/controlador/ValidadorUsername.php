<?php
	include("fachada.php");
	/**
	 * Se valida si existe el username true, si no existe false
	 * */	
	function validarExisteUsername($username){
			$instancia = new fachada();
			$db = $instancia->conect();
			
			$colection_Admin = $db->admin;	 
			$usr_Admin = array( "admin_username" => $username);	 
			$result_Admin = $colection_Admin->find($usr_Admin);
			
			$colection_Juez = $db->juez;
			$usr_Juez = array( "juez_username" => $username);
			$result_Juez = $colection_Juez->find($usr_Juez);
			
			$colection = $db->jugador;
			$usr = array( "jugador_username" => $username);	 
			$result = $colection->find($usr);
			$result_tmp=true;//existe
			
			if(!(($result_Admin->count()!=0) ||($result_Juez->count()!=0) ||($result->count()!=0))){
				//no existe en la base de datos, puede ser usada para registrar nuevos datos
				//
				$result_tmp=false;
			}
			
			return $result_tmp;		
			
	}
	// existe entoces es falso, no muestra nada
	//echo validarExisteUsername("alvaro");
	

?>

