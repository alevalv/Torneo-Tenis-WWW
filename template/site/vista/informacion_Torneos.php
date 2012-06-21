<?php include ("../controlador/seguridad.php");
	comprobarSesion("informacion_Torneos.php");
?>
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
				<div class="wrapper tabs">
					<ul class="nav">
						<li class="selected"><a href="#tab1">1</a></li>
						<li><a href="#tab2">2</a></li>
						<li><a href="#tab3">3</a></li>
						<li><a href="#tab4">4</a></li>
						<li><a href="#tab5">5</a></li>
						<li><a href="#tab6">6</a></li>
					</ul>
					<div class="tab-content" id="tab1">
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab2">

						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab3">
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab4">
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab5">

						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
					</div>
					<div class="tab-content" id="tab6">
						<h5><span class="dropcap"><strong>21</strong><span>06</span></span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
							<p class="pad_bot1">Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>28</strong><span>06</span></span>Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="pad_bot1">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
							<a href="#" class="link1">Read More</a>
						</div>
						<h5><span class="dropcap"><strong>25</strong><span>06</span></span>Duis aute irure dolor in reprehenderit</h5>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
							<p class="pad_bot1">Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
							<a href="#" class="link1">Read More</a>
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

