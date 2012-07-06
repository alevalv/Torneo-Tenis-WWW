<?php include ("../controlador/seguridad.php");
	include_once("../modelo/consultasTorneo.php");
	include_once("../controlador/fachada.php");
	$pagename="verTorneo.php";
	comprobarSesion($pagename);
	$data = getTorneo($_GET['torneoid']);
	if($_SESSION["rol"]=="jugador"){
		$isJugador=true;
	}
	else if($_SESSION["rol"]=="admin"){
		$isAdmin=true;
	}
	else{
		$isJugador=false;
		$isAdmin=false;
	}
	$torneoDisponible = esTorneoFuturo($_GET['torneoid']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Torneos</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>

  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body id="page4">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main">
<!-- header -->
			<header>
				<?php 
					include("../controlador/insertMenu.php");
					$var = insertar_menus($pagename);
					echo $var;
				?>
			</header><div class="ic">More Website Templates  at TemplateMonster.com!</div>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
	<div class="body3">
		<div class="main">
<!-- content -->
			<article id="content">
				<div class="wrapper">
					<section class="cols">
						<div class="wrapper pad_bot2">
							<h3><span class="dropcap">></span><?php echo $data['torneo_nombre']; ?></h3>
							<p class="pad_bot1">Información del Torneo</p>
							<p>Id: <br/> <?php echo $data['_id']; ?></p>
							<p>Ubicación: <br/> <?php echo $data['torneo_lugar']; ?></p>
							<p>Número de Canchas: <br/> <?php echo $data['torneo_num_canchas']; ?></p>
							<p>Número de Jugadores: <br/> <?php echo $data['torneo_num_jugadores']; ?></p>
							<p>Fecha de Inicio: <br/> <?php echo "{$data['torneo_fecha_inicio_anio']}-";
								echo str_pad($data['torneo_fecha_inicio_mes'],2, '0', STR_PAD_LEFT);
								echo  '-';
								echo str_pad($data['torneo_fecha_inicio_dia'],2, '0', STR_PAD_LEFT);
								?></p>
							<p>Fecha de Finalización: <br/> <?php echo "{$data['torneo_fecha_fin_anio']}-";
								echo str_pad($data['torneo_fecha_fin_mes'],2, '0', STR_PAD_LEFT);
								echo  '-';
								echo str_pad($data['torneo_fecha_fin_dia'],2, '0', STR_PAD_LEFT);
								?></p>
								
						</div>
				
					




					</section>
					<?php if(!$torneoDisponible) { ?>
					<section class="cols pad_left1">
						<div class="wrapper pad_bot2">
							<h3><span class="dropcap">></span>Ganadores</h3>
							<p class="pad_bot1">Información sobre los ganadores</p>
							<p>En Construcción</p>
						</div>						
					</section>
					<?php } ?>
					
					<section class="cols pad_left1">
						<div class="wrapper pad_bot2">
							<h3><span class="dropcap">></span>Menu</h3>
							<?php if($isJugador && $torneoDisponible) { ?>
							<p class="pad_bot1">Inscribirse a este torneo</p>
							<form id="registroJugador" action="../modelo/registrarEnTorneo.php" method="post">
								<?php
								if($_GET["errorinsert"]=="si"){
									echo 	'<div id="errorMensage">
											Error al registrarse
										</div><p><br></p>';
								}else if($_GET["sussesinsert"]=="si"){
									echo 	'<div id="sussesMensage">
											Registro realizado Correctamente
										</div><p><br></p>';
								}
								?>
							<div>
								<input type="hidden" value="<?php echo $data['_id']; ?>" name="combo">
								<input type="submit" value="Registrarse" class="submitbutton">
							</div>
							</form>
							<?php } ?>
							<?php if($isAdmin && $torneoDisponible) { ?>
							<p class="pad_bot1">Editar este Torneo: </p>
							<p><br>
							<form id="registroJugador" action="editarTorneo.php" method="get">
								<input type="hidden" name="torneoid" class="input" value="<?php echo $data['_id']; ?>" required>
								<input type="submit" value="Editar" class="submitbutton">
							</form></p>
							<?php } ?>
						</div>
					</section>
					
				</div>
			</article>
		</div>
	</div>
	<div class="body4">
		<div class="main">
			<article id="content2">
				<div class="wrapper">
					<!--
					<section class="col3">
						<h4>Why Us?</h4>
						<ul class="list1">
							<li><a href="#">Lorem ipsum dolor sit</a></li>
							<li><a href="#">Dmet, consectetur</a></li>
							<li><a href="#">Adipisicing elit eiusmod </a></li>
							<li><a href="#">Tempor incididunt ut</a></li>
						</ul>
					</section>
					-->
					<section class="col3 pad_left2">
						<h4>Contactanos</h4>
						<ul class="address">
							<li><span>Pais:</span>Colombia</li>
							<li><span>Ciudad:</span>Santiago de Cali</li>
							<li><span>Telefono:</span>605 45 78</li>
							<li><span>Email:</span><a href="mailto:">webtennis@mail.com</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>¡Siguenos!</h4>
						<ul id="icons">
							<li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
							<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter</a></li>
							<li><a href="#"><img src="images/icon3.jpg" alt="">LinkedIn</a></li>
							<li><a href="#"><img src="images/icon4.jpg" alt="">Delicious</a></li>
						</ul>
					</section>
					<!--<section class="col2 right">
						<h4>Newsletter</h4>
						<form id="newsletter" method="post">
							<div>
								<div class="wrapper">
									<input class="input" type="text" value="Type Your Email Here"  onblur="if(this.value=='') this.value='Type Your Email Here'" onfocus="if(this.value =='Type Your Email Here' ) this.value=''" >
								</div>
								<a href="#" class="button" onclick="document.getElementById('newsletter').submit()">Subscribe</a>
							</div>
						</form>
					</section>
					-->
				</div>
			</article>
<!-- content end -->
		</div>
	</div>
		<div class="main">
<!-- footer -->
			<footer>
				<a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website Template</a> by TemplateMonster.com<br>
				<a href="http://www.templates.com/product/3d-models/" target="_blank">3D Models</a> provided by Templates.com
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		//tabs.init();
	})
</script>
</body>
</html>

