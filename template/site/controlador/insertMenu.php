<?php	
	function insertar_menus(){
		session_start();
			$output = '<div class="wrapper">

	<h1><a href="index.html" id="logo">Tenis Vallecaucano</a></h1>
				<nav>
					<ul id="menu">
						<li id="nav1" class="active"><a href="../vista/index.php">Inicio<span>¡Bienvenido!</span></a></li>';
				$output .= '<li id="nav2"><a href="../vista/informacion_Torneos.php">Torneos<span>sigue la acción</span></a></li>';
						if($_SESSION["rol"] == "jugador"){
							$output .= '<li id="nav3"><a href="../vista/jugador.php">Jugador<span>gestione su cuenta</span></a></li>';
						}elseif($_SESSION["rol"] == "admin"){
							$output .= '<li id="nav3"><a href="../vista/administrador.php">Administrador<span>gestione su cuenta</span></a></li>';
						}elseif($_SESSION["rol"] == "juez"){
							$output .= '<li id="nav3"><a href="../vista/juez.php">Juez<span>gestione su cuenta</span></a></li>';
						}
						if($_SESSION["autentificado"] == "si"){
							if($_SESSION["rol"] == "jugador"){
								$output .= '<li id="nav4"><a href="../vista/registrarTorneojugador.php">Participar<span>en un torneo</span></a></li>';
								$output .= '<li id="nav5"> <a href="../controlador/salir.php">'.$_SESSION["username"].'<span>Desconectarme</span></a></li>';
							}else {
								$output .= '<li id="nav4"> <a href="../controlador/salir.php">'.$_SESSION["username"].'<span>Desconectarme</span></a></li>';
							}
						}else{
							$output .= '<li id="nav3"><a href="../vista/registrarJugador.php">Registrate<span>para participar</span></a></li>
								      <li id="nav4"><a href="../vista/login.php">Identificate<span>si eres miembro</span></a></li>';		
						}
			  $output .='</ul>
				</nav>
		 </div>';
		 return $output;
		}
?>