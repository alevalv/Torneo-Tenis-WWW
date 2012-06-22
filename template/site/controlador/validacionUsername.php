<?php
	include("fachada.php");
	class ValidadorUsername
	{
		public static function validar($username){
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
			if($result_Admin->count()==0 && $result_Juez->count()==0 && $result->count()==0){
				return true;
			}
			else{ return false; }
  	}	
  	echo ValidadorUsername::validar("alejo");
}
?>

