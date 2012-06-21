<?php include ("../controlador/seguridad.php");
	comprobarSesion("crearTorneo.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Crear Torneo</title>
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
					echo insertar_menus();
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
						<h2 class="under">Crear Torneo</h2>
						<form id="registroJugador" action="../modelo/registrarTorneo.php" method="post">
						<div>
							<div  class="wrapper">
								<span>Ubicación del Torneo:</span>
								<input type="text" name="torneo_lugar" class="input" >
							</div>
							<div  class="wrapper">
								<span>Nombre del Torneo:</span>
								<input type="text" name="torneo_nombre" class="input" >
							</div>
							<div  class="wrapper">
								<span>Número de Canchas:</span>
								<input type="text" name="torneo_num_canchas" class="input" >
							</div>
							<div  class="wrapper">
								<span>Número de Jugadores:</span>
								<input type="text" name="torneo_num_jugadores" class="input" >
							</div>
							<div  class="wrapper">
								<span>Fecha de Inicio:</span>
								<input type="text" name="torneo_fecha_inicio" class="input" >
							</div>
							<div  class="wrapper">
								<span>Fecha de Finalización:</span>
								<input type="text" name="torneo_fecha_fin" class="input" >
							</div>
							<div  class="wrapper">
								<span>Categoría:</span><br /><br />
								<div class="radios">
									<input type="radio" name="torneo_categoria" value="Categoria 1" class="input" >Categoría 1<br />
									<input type="radio" name="torneo_categoria" value="Categoria 2" class="input" >Categoría 2<br />
									<input type="radio" name="torneo_categoria" value="Categoria 3" class="input" >Categoría 3<br />
									<input type="radio" name="torneo_categoria" value="Categoria 4" class="input" >Categoría 4<br />
									<input type="radio" name="torneo_categoria" value="Novato" checked class="input" >Novato
								</div>
							</div>
							<div  class="wrapper">
								<span>Modalidad:</span><br /><br />
								<div class="radios">
									<input type="radio" name="torneo_modalidad" value="single_masculino" class="input" CHECKED>Single Masculino<br />
									<input type="radio" name="torneo_modalidad" value="single_femenino" class="input" >Single Femenino<br />
									<input type="radio" name="torneo_modalidad" value="single_mixto" class="input" >Single Mixto<br />
									<input type="radio" name="torneo_modalidad" value="dobles_mixto" class="input" >Dobles Mixto<br />
								</div>
							</div>
							<a href="#" onClick="document.getElementById('registroJugador').submit()">Enviar</a>
							<a href="#" onClick="document.getElementById('registroJugador').reset()">Limpiar</a>
						</div>
					</form>
					</section>
					<section class="col2 pad_left1">
						<h2 class="under">Contacts</h2>
						<div id="address"><span>Country:<br>
								City:<br>
								Telephone:<br>
								Email:</span>
								USA<br>
								San Diego<br>
								+354 5635600<br>
								<a href="mailto:" class="color2">elenwhite@mail.com</a></div>
						<h2 class="under">Miscellaneous</h2>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium volupta- tum deleniti atque corrupti quos dolores et quas molestias excep- turi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
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
						<h4>Address</h4>
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
		tabs.init();
	})
</script>
</body>
</html>
