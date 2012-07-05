<?php	
	function insertar_menus($pagename){
		session_start();
		$code_active = 'class="active"';
		$active_index='';
		$active_torneo='';
		$active_settings='';
		$active_login='';
		$active_register='';
		if($pagename=="index.php"){
			$active_index = $code_active;
		}else if($pagename=="informacion_Torneos.php" || ($pagename == "verTorneo.php")){
			$active_torneo = $code_active;
		}else if( ($pagename=="juez.php") || ($pagename=="administrador.php") || ($pagename=="jugador.php")
				||($pagename=="asignarJuezPartido.php")||($pagename=="crearTorneo.php")||($pagename=="gestionarCronograma.php")
				||($pagename=="ingresarJuez.php")||($pagename=="asignarJuezPartido.php") || ($pagename="registrarTorneoJugador.php")){
			$active_settings = $code_active;
		}else if($pagename=="login.php"){
			$active_login = $code_active;
		}else if(($pagename=="registrarJugador.php") || ($pagename=="registrarPareja.php") ){
			$active_register = $code_active;
		} 
		$output = '<div class="wrapper">
				<h1><a href="../vista/index.php" id="logo">Tenis Vallecaucano</a></h1>
				<nav>
					<ul id="menu">
						<li id="nav1" '.$active_index.'><a href="../vista/index.php">Inicio<span>¡Bienvenido!</span></a></li>';
				$output .= '<li id="nav2" '.$active_torneo.'><a href="../vista/informacion_Torneos.php">Torneos<span>sigue la acción</span></a></li>';
						if($_SESSION["rol"] == "jugador"){
							$output .= '<li id="nav3" '.$active_settings.'><a href="../vista/jugador.php">Jugador<span>gestione su cuenta</span></a></li>';
						}elseif($_SESSION["rol"] == "admin"){
							$output .= '<li id="nav3" '.$active_settings.'><a href="../vista/administrador.php">Administrador<span>gestione su cuenta</span></a></li>';
						}elseif($_SESSION["rol"] == "juez"){
							$output .= '<li id="nav3" '.$active_settings.'><a href="../vista/juez.php">Juez<span>gestione su cuenta</span></a></li>';
						}
						if($_SESSION["autentificado"] == "si"){
							$output .= '<li id="nav5" > <a href="../controlador/salir.php">'.$_SESSION["username"].'<span>Desconectarme</span></a></li>';							
						}else{
							$output .= '<li id="nav4" '.$active_register.'><a href="../vista/registrarJugador.php">Registrate<span>para participar</span></a></li>
								      <li id="nav6" '.$active_login.'><a href="../vista/login.php">Identificate<span>si eres miembro</span></a></li>';		
						}
			  $output .='</ul>
				</nav>
		 </div>';
		 return $output;
		}
?>
