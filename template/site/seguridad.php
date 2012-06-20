<?php
//Inicio la sesión
function comprobarSesion($pagename){	
	
	session_start();
	//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
	if ($_SESSION["autentificado"] != "si") {
		if( ($pagename == "index.php") || ($pagename == "login.php")){
			exit();
		}
		//si no existe, envio a la página de autentificacion
		header("Location: login.php");
		//ademas salgo de este script    
		exit();
    }else{// si nos registramos
		if( ($pagename == "resgitrarJugador.php") || ($pagename == "login.php")){//redirecciona a index.php
			header("Location: index.php");
		}
			if($_SESSION["rol"] != "admin"){
				
				if(($pagename == "gestionarAdmin.php") || ($pagename == "crearTorneo.php" || ($pagename == "ingresarJuez.php"))){
						exit();
				}else{
					//No se puede acceder no tiene privilegios alguna pagina de error
					//header("Location: error.php");
				}
			}
		
		}
    
}
    
?> 
