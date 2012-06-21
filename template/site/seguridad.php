<?php
//Inicio la sesión
function comprobarSesion($pagename){	
	
	session_start();
	//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
	if ($_SESSION["autentificado"] != "si") {//no esta autentificado
		if($pagename == "index.php"){
			return 0;
		}if($pagename == "login.php"){
			return 0;
		}if($pagename == "registrarJugador.php"){
			return 0;
			}
		//si no existe, envio a la página de autentificacion
		header("Location: login.php");
		//ademas salgo de este script    
		return 0;
    }else{// si nos registramos
		if($pagename == "index.php"){ return 1;}
		if(($pagename == "registrarJugador.php") || ($pagename == "login.php")){//redirecciona a index.php
			header("Location: index.php");
			return 1;			
		}
			if($_SESSION["rol"] != "admin"){
				
				if(($pagename == "administrador.php") || ($pagename == "crearTorneo.php" || ($pagename == "ingresarJuez.php"))){
					return 1;

				}else{
					//No se puede acceder no tiene privilegios alguna pagina de error
					//header("Location: errorPrivilegios.php");
				}
			}
			if($_SESSION["rol"] != "juez"){
				
				if($pagename == "juez.php") {
					return 1;

				}else{
					//No se puede acceder no tiene privilegios alguna pagina de error
					//header("Location: errorPrivilegios.php");
				}
			}
			
			if($_SESSION["rol"] != "jugador"){
				
				if($pagename == "jugador.php"){
					return 1;

				}else{
					//No se puede acceder no tiene privilegios alguna pagina de error
					//header("Location: errorPrivilegios.php");
				}
			}
		
		}
    return 3;
}
    
?> 
