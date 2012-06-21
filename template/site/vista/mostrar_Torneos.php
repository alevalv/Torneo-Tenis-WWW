<!DOCTYPE html>
<html lang="es">
<head>
<title>Gestión Administrador</title>
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
<script type="text/javascript" src="js/tabs-inter.js"></script>


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

<body id="page4">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main">
<!-- header -->
			<header>
				<?php 
					include("../controlador/insertMenu.php");
					$var = insertar_menus($_SESSION);
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
				<h5>Nombre Torneo</h5>
				<div class="wrapper tabs">
					<h3> Categorias</h3>
					<ul class="nav">
						<li class="selected"><a href="#tab1">C1</a></li>
						<li><a href="#tab2">C2</a></li>
						<li><a href="#tab3">C3</a></li>
						<li><a href="#tab4">C4</a></li>
						<li><a href="#tab5">C5</a></li>
						<li><a href="#tab6">C6</a></li>
					</ul>
					<p> <br></p>
					<div class="tab-content" id="tab1">
						<p> <br> </p><h1> Rondas1</h1><p> <br> </p>
						<div>
							<div class="wrapper tabs-inter">
							<ul class="nav-inter">
								<li class="selected-inter"><a href="#tabR1C1">R1</a></li>
								<li><a href="#tabR1C2">R2</a></li>
								<li><a href="#tabR1C3">R3</a></li>
								<li><a href="#tabR1C4">R4</a></li>
								<li><a href="#tabR1C5">R5</a></li>
								<li><a href="#tabR1C6">R6</a></li>
							</ul>
							<p> <br> </p>
							<div class="tab-content-inter" id="tabR1C1">
								<div class="wrapper">
									<section class="cols">
										<div class="wrapper pad_bot2">
											<h3><span class="dropcap">1</span>Productaaaaaa name</h3>
											<figure><img src="images/page4_img1.jpg" alt=""></figure>
											<p class="pad_bot1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
											<a href="#" class="link1">Read More</a>
										</div>
										<div class="wrapper">
											<h3><span class="dropcap">4</span>Product name</h3>
											<figure><img src="images/page4_img2.jpg" alt=""></figure>
											<p class="pad_bot1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese- runt mollit anim id est laborum.</p>
											<a href="#" class="link1">Read More</a>
										</div>
									</section>								
								</div>
							</div>
							<div class="tab-content-inter" id="tabR1C2">
								<div class="wrapper">
									<section class="cols">
										<div class="wrapper pad_bot2">
											<h3><span class="dropcap">1</span>Product111111 name</h3>
											<figure><img src="images/page4_img1.jpg" alt=""></figure>
											<p class="pad_bot1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
											<a href="#" class="link1">Read More</a>
										</div>
										<div class="wrapper">
											<h3><span class="dropcap">4</span>Product name</h3>
											<figure><img src="images/page4_img2.jpg" alt=""></figure>
											<p class="pad_bot1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese- runt mollit anim id est laborum.</p>
											<a href="#" class="link1">Read More</a>
										</div>
									</section>								
								</div>
							</div>
						</div>						
					
						</div>
					
					</div>
					<div class="tab-content" id="tab2">
						<h1> Rondas2</h1>
						<div>
							<div class="wrapper tabs-inter">
							<ul class="nav-inter">
								<li class="selected-inter"><a href="#tabR2C1">R1</a></li>
								<li><a href="#tabR2C2">R2</a></li>
								<li><a href="#tabR2C3">R3</a></li>
								<li><a href="#tabR2C4">R4</a></li>
								<li><a href="#tabR2C5">R5</a></li>
								<li><a href="#tabR2C6">R6</a></li>
							</ul>
							<p> <br></p>
							<div class="tab-content-inter" id="tabR2C1">
								<div class="wrapper">
									<section class="cols">
										<div class="wrapper pad_bot2">
											<h3><span class="dropcap">1</span>Product222222 name</h3>
											<figure><img src="images/page4_img1.jpg" alt=""></figure>
											<p class="pad_bot1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
											<a href="#" class="link1">Read More</a>
										</div>
										<div class="wrapper">
											<h3><span class="dropcap">4</span>Product name</h3>
											<figure><img src="images/page4_img2.jpg" alt=""></figure>
											<p class="pad_bot1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese- runt mollit anim id est laborum.</p>
											<a href="#" class="link1">Read More</a>
										</div>
									</section>								
								</div>
							</div>
							<div class="tab-content-inter" id="tabR2C2">
								<div class="wrapper">
									<section class="cols">
										<div class="wrapper pad_bot2">
											<h3><span class="dropcap">1</span>Product344444 name</h3>
											<figure><img src="images/page4_img1.jpg" alt=""></figure>
											<p class="pad_bot1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
											<a href="#" class="link1">Read More</a>
										</div>
										<div class="wrapper">
											<h3><span class="dropcap">4</span>Product name</h3>
											<figure><img src="images/page4_img2.jpg" alt=""></figure>
											<p class="pad_bot1">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese- runt mollit anim id est laborum.</p>
											<a href="#" class="link1">Read More</a>
										</div>
									</section>								
								</div>
							</div>
						</div>						
					
						</div>
					</div>
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

