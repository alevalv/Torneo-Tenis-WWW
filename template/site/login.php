<!DOCTYPE html>
<html lang="en">
<head>
<title>Ingresar</title>
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
				<div class="wrapper">
				<!--<h1><a href="index.html" id="logo"></a></h1>-->
				<nav>
					<ul id="menu">
						<li id="nav1" class="active"><a href="index.html">Inicio<span>¡Bienvenido!</span></a></li>
						<li id="nav2"><a href="jugador.php">Jugador<span>Fresh</span></a></li>
						<li id="nav3"><a href="administrador.php">Administrador<span>Fresh</span></a></li>
						<li id="nav4"><a href="informacion_Torneos.php">Torneos<span>sigue la acción</span></a></li>
						<?php
						if($_SESSION["autentificado"] != "si"){
									echo '<li id="nav5"><a href="registrarJugador.html">Registrate<span>para participar</span></a></li>
									<li id="nav6"><a href="login.php">Identificate<span>si eres miembro</span></a></li>' ;
						}else{
								echo '<li id="nav5"> <a href="salir.php">'.$_SESSION["username"].'<span>Desconectarme</span></a></li>';
							} ?>
					</ul>
				</nav>
				</div>
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
						<h2 class="under">Iniciar Sesion</h2>
						<form id="registroJugador" action="autenticar.php" method="POST">
							<div>
								<div class="wrapper">
									<span>Nombre de Usuario:</span>
									<input type="text" name="username" class="input" >
								</div>
								<div  class="wrapper">
									<span>Password:</span>
									<input type="password" name="password" class="input" >
								</div>
								<a href="#" onClick="document.getElementById('registroJugador').submit()">Enviar</a>
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
					<section class="col3">
						<h4>Why Us?</h4>
						<ul class="list1">
							<li><a href="#">Lorem ipsum dolor sit</a></li>
							<li><a href="#">Dmet, consectetur</a></li>
							<li><a href="#">Adipisicing elit eiusmod </a></li>
							<li><a href="#">Tempor incididunt ut</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>Address</h4>
						<ul class="address">
							<li><span>Country:</span>USA</li>
							<li><span>City:</span>San Diego</li>
							<li><span>Phone:</span>8 800 154-45-67</li>
							<li><span>Email:</span><a href="mailto:">progress@mail.com</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>Follow Us</h4>
						<ul id="icons">
							<li><a href="#"><img src="images/icon1.jpg" alt="">Facebook</a></li>
							<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter</a></li>
							<li><a href="#"><img src="images/icon3.jpg" alt="">LinkedIn</a></li>
							<li><a href="#"><img src="images/icon4.jpg" alt="">Delicious</a></li>
						</ul>
					</section>
					<section class="col2 right">
						<h4>Newsletter</h4>
						<form id="newsletter" method="post">
							<div>
								<div class="wrapper">
									<input class="input" type="text" value="Type Your Email Here"  onblur="if(this.value=='') this.value='Type Your Email Here'" onFocus="if(this.value =='Type Your Email Here' ) this.value=''" >
								</div>
								<a href="#" class="button" onClick="document.getElementById('newsletter').submit()">Subscribe</a>
							</div>
						</form>
					</section>
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
