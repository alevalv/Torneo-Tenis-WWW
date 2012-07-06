<?php 
if(isset($_POST['username']) && isset($_POST['password'])){
	 include("../controlador/fachada.php");
     $instancia = new fachada();
	 $db = $instancia->conect();
	 $passmd5 = md5($_POST['password']);
	 
	 if(isset($_GET['movil'])){
		 if($_GET['movil']=="si"){
			$colection_Juez = $db->juez;
			$usr_Juez = array("juez_username" => $_POST['username'] , "juez_password" => $passmd5);
			$result_Juez = $colection_Juez->find($usr_Juez);
			
			if($result_Juez->count()!=0){
				session_start();
				$_SESSION["autentificado"]= "si";
				$_SESSION["username"]= $_POST['username'];
				$_SESSION["rol"]= "juezmovil";
				foreach($result_Juez as $unJuez){
					$_SESSION["juez_codigo"]=$unJuez['juez_codigo'];
				}
				echo '<html><body><script type="text/javascript"> window.location="../aplicacion-movil/partido.php";</script></body> </html>';
				//header ("Location: ../aplicacion-movil/partido.php");
				exit();
			}else{
				echo '<html><body><script type="text/javascript">window.location="../aplicacion-movil/index.php?errorusuario=si";</script></body> </html>';

				//header("Location: ../aplicacion-movil/index.php?errorusuario=si");
				exit();
			}
		}
		exit();
	}else{
		$colection_Admin = $db->admin;	 
		$usr_Admin = array( "admin_username" => $_POST['username'] , "admin_password" => $passmd5);	 
		$result_Admin = $colection_Admin->find($usr_Admin);
	 
		$colection_Juez = $db->juez;
		$usr_Juez = array( "juez_username" => $_POST['username'] , "juez_password" => $passmd5);
		$result_Juez = $colection_Juez->find($usr_Juez);
	 
		$colection = $db->jugador;
		$usr = array( "jugador_username" => $_POST['username'] , "jugador_password" => $passmd5);	 
		$result = $colection->find($usr);
		
		if($result_Admin->count()!=0){
			session_start();
			$_SESSION["autentificado"]= "si";
			$_SESSION["username"]= $_POST['username'];
			$_SESSION["rol"]= "admin";
		}else if($result_Juez->count()!=0){
			session_start();
			$_SESSION["autentificado"]= "si";
			$_SESSION["username"]= $_POST['username'];
			$_SESSION["rol"]= "juez";
		}else if($result->count()!=0){
			session_start();
			$_SESSION["autentificado"]= "si";
			$_SESSION["username"]= $_POST['username'];
			$_SESSION["rol"]= "jugador";
			$result->next();
			$data=$result->current();
			if($data["jugador_es_pareja"]){
				$_SESSION["pareja"]=true;				
			}else{
				$_SESSION["pareja"]=false;
			}
		}else{
			header("Location: ../vista/login.php?errorusuario=si");
			exit();
		}
		if(isset($_GET['pagereturn'])){
				header ("Location: ../vista/".$_GET['pagereturn']);
			}else{
				header ("Location: ../vista/index.php");		 
			}	
		 
	 }
}
?>
	</body>



</html>
