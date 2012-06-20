<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
<html>
	<head>
		<title>titulo</title>
	</head>
	<body> -->
<?php
/*echo	'<p>
				empezamos
				</p>';
	*/			
 
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
		 header ("Location: index.html");
	 }else{
		header("Location: login.php?errorusuario=si");	 
	 }
}
 

?> 
	<!--</body>
	</html>  -->
