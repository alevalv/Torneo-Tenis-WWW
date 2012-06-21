<?php
//Inicio la sesión
function comprobarSesion($pagename){	
	
	session_start();
	//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
	if ($_SESSION["autentificado"] != "si") {
		if($pagename == "index.php"){
			header("Location: index.php");
			return 0;
		}if($pagename == "login.php"){
			//header("Location: login.php");
			return 0;
		}if($pagename == "resgitrarJugador.php"){
			header("Location: resgitrarJugador.php");
			return 0;
			}
		//si no existe, envio a la página de autentificacion
		header("Location: login.php");
		//ademas salgo de este script    
		exit();
    }else{// si nos registramos
		if( ($pagename == "index.php") || ($pagename == "resgitrarJugador.php") || ($pagename == "login.php")){//redirecciona a index.php
			header("Location: index.php");
			return 1;
			
		}
			if($_SESSION["rol"] != "admin"){
				
				if(($pagename == "administrador.php") || ($pagename == "crearTorneo.php" || ($pagename == "ingresarJuez.php"))){
					return 1;

				}else{
					//No se puede acceder no tiene privilegios alguna pagina de error
					//header("Location: error.php");
				}
			}
		
		}
    
}
    
?> 
