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
		if($pagename == "informacion_Torneos.php"){
			return 0;
			}
		if($pagename == "registrarPareja.php"){
			return 0;
		}
		if($pagename == "aplicacion-movil/index.php"){
			return 3;
		}
		if(($pagename == "aplicacion-movil/partido.php")|| ($pagename == "aplicacion-movil/resultados.php")){
			//header("Location: ../aplicacion-movil/index.php");
			//location.href='../aplicacion-movil/index.php';
			echo '<html><body><script type="text/javascript">window.location="../aplicacion-movil/index.php";</script></body> </html>';
			return 3;			
		}
		//si no existe, envio a la página de autentificacion
		header('Location: ../vista/login.php?pagereturn='.$pagename);
		//ademas salgo de este script    
		return 0;
    }else{// si nos registramos
		if(($pagename == "index.php") || ($pagename == "informacion_Torneos.php")){ return 1;}
		if(($pagename == "registrarJugador.php") || ($pagename == "registrarPareja.php") || ($pagename == "login.php")){//redirecciona a index.php
			header("Location: ../vista/index.php");
			return 1;			
		}
			if($_SESSION["rol"] == "admin"){
				
				if(($pagename == "administrador.php") || ($pagename == "crearTorneo.php" || ($pagename == "ingresarJuez.php")
				|| ($pagename == "asignarJuezPartido.php"))){
					return 1;

				}
				//No se puede acceder no tiene privilegios alguna pagina de error
				header("Location: ../vista/errorPrivilegios.php");
				return 1;
				
			}
			if($_SESSION["rol"] == "juez"){
				
				if($pagename == "juez.php") {
					return 1;
				}
				//No se puede acceder no tiene privilegios alguna pagina de error
				
				header("Location: ../vista/errorPrivilegios.php");
				return 1;			
				
			}
			
			if($_SESSION["rol"] == "jugador"){
				
				if(($pagename == "jugador.php")|| ($pagename=="registrarTorneoJugador.php")){
					return 1;

				}
				//No se puede acceder no tiene privilegios alguna pagina de error
				header("Location: ../vista/errorPrivilegios.php");
				return 1;
				
			}
			
			if($_SESSION["rol"] == "juezmovil"){
				if($pagename=="aplicacion-movil/index.php"){
					//header("Location: ../aplicacion-movil/partido.php");
					//location.href='../aplicacion-movil/partido.php';
					echo '<html><body><script type="text/javascript">window.location="../aplicacion-movil/partido.php";</script></body> </html>';
					return 3;
				}
				
				if(($pagename == "aplicacion-movil/partido.php") 
				|| ($pagename == "aplicacion-movil/resultados.php")){
					return 3;

				}
				//No se puede acceder no tiene privilegios alguna pagina de error
				//header("Location: ../aplicacion-movil/index.php");
				//location.href='../aplicacion-movil/index.php';
				echo '<html><body><script type="text/javascript">window.location="../aplicacion-movil/index.php";</script></body> </html>';
				return 1;
				
			}
			
		}
		return 2;
	}
    
?> 
