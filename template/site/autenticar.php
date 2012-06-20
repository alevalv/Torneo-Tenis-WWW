<?php 
 if(isset($_POST['username']) && isset($_POST['password'])){
	 include("fachada.php");
     $instancia = new fachada();
	 $db = $instancia->conect();
	 $colection = $db->jugador;
	 $usr = array( "jugador_username" => $_POST['username'] , "jugador_password" => $_POST['password']);	 
	 $result = $colection->find($usr);
	 
	 if($result->count()!=0){
		 //echo "NO esta vacio esta cosa";
		 session_start();
		 $_SESSION["autentificado"]= "si";
		 header ("Location: index.php");
	 }else{
		header("Location: login.php?errorusuario=si");	 
	 }
}
 

?>
