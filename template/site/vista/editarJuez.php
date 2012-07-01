<?php include ("../controlador/seguridad.php");
	$pagename="editarJuez.php";
	comprobarSesion($pagename);
	include("../modelo/consultaJuez.php");
	session_start();
	$data = consultarJuezUserName($_SESSION["username"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Crear Juez</title>
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
</head>
<body id="page5">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main">
<!-- header -->
			<header>
				<?php 					
					include("../controlador/insertMenu.php");
					echo insertar_menus($pagename);
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
					<section class="col1">
						<h2 class="under">Registrar Juez</h2>
						<form id="registroJugador" action="../modelo/actualizarJuez.php" method="post">
						<?php
							if($_GET["errorinsert"]=="si"){
								echo 	'<div id="errorMensage">
											Error al actualizar los datos del Juez
										</div><p><br></p>';
							}else if($_GET["sussesinsert"]=="si"){
								echo 	'<div id="sussesMensage">
											Edicion correcta
										</div><p><br></p>';
							}
						?>
						<div id="errorMensage" name="div-validar"> </div>
						<div>
							<div  class="wrapper">
								<span>Cedula:</span>
								<input type="text" name="juez_codigo" class="input" value="<?php data['juez_codigo']?>" readonly="readonly">
							</div>
							<div  class="wrapper">
								<span>Nombre Completo:</span>
								<input type="text" name="juez_nombre" class="input" value="<?php data['juez_nombre']?>">
							</div>
							<div  class="wrapper">
								<span>Nombre de Usuario:</span>
								<input type="text" name="juez_username" class="input" value="<?php data['juez_username']?>">
							</div>
							<div  class="wrapper">
								<span>Fecha de Nacimiento:</span>
								<input type="text" name="juez_fecha_nacimiento" class="input" value="<?php data['juez_fecha_nacimiento']?>">
							</div>
							<div  class="wrapper">
								<span>Contraseña Nueva:</span>
								<input type="password" name="juez_password" class="input" value="<?php data['juez_password']?>">
							</div>
							<div  class="wrapper">
								<span>Confirmar Contraseña:</span>
								<input type="password" name="juez_password_confirmation" class="input" value="<?php data['juez_password']?>">
							</div>							
							<a href="#" onClick="document.getElementById('registroJugador').submit()">Actualizar</a>
							<a href="#" onClick="document.getElementById('registroJugador').reset()">Limpiar</a>
						</div>
					</form>
					</section>
					<section class="col2 pad_left1">
						<h2 class="under">Contactar</h2>
						<div id="address"><span>Pais:<br>
								Ciudad:<br>
								Telefono:<br>
								Email:</span>
								Colombia<br>
								Santiago de Cali<br>
								605 45 78<br>
								<a href="mailto:" class="color2">webtennis@mail.com</a></div>
						
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
