<?php 
 if(isset($_POST['username']) && isset($_POST['password'])){
	 include("fachada.php");
     $instancia = new fachada();
	 $db = $instancia->conect();
	 	 
	 $colection_Admin = $db->admin;	 
	 $usr_Admin = array( "admin_username" => $_POST['username'] , "admin_password" => $_POST['password']);	 
	 $result_Admin = $colection_Admin->find($usr_Admin);
	 
	 $colection_Juez = $db->juez;
	 $usr_Juez = array( "juez_username" => $_POST['username'] , "juez_password" => $_POST['password']);
	 $result_Juez = $colection_Juez->find($usr_Juez);
	 
	 $colection = $db->jugador;
	 $usr = array( "jugador_username" => $_POST['username'] , "jugador_password" => $_POST['password']);	 
	 $result = $colection->find($usr);
	 
	 if($result_Admin->count()!=0){
		 session_start();
		 $_SESSION["autentificado"]= "si";
		 $_SESSION["username"]= $_POST['username'];
		 $_SESSION["rol"]= "admin";

		 header ("Location: index.php");		 
	 }else if($result_Juez->count()!=0){
		 session_start();
		 $_SESSION["autentificado"]= "si";
		 $_SESSION["username"]= $_POST['username'];
		 $_SESSION["rol"]= "juez";
		 header ("Location: index.php");
	 }else if($result->count()!=0){
		 session_start();
		 $_SESSION["autentificado"]= "si";
		 $_SESSION["username"]= $_POST['username'];
		 $_SESSION["rol"]= "jugador";
		 header ("Location: index.php");
	 }else{
		header("Location: login.php?errorusuario=si");
	 }
}
 

?>
