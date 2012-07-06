
<!DOCTYPE html>
<html lang="es">
<head>
<title>Torneos</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../vista/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../vista/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../vista/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="../vista/css/table.css" type="text/css" media="all">

<script type="text/javascript" src="../vista/js/jquery-1.6.js" ></script>
<script type="text/javascript" src="../vista/js/cufon-yui.js"></script>
<script type="text/javascript" src="../vista/js/cufon-replace.js"></script>
<script type="text/javascript" src="../vista/js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="../vista/js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="../vista/js/tabs.js"></script>

<link href="../vista/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />

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
					$var = insertar_menus($pagename);
					echo $var;
				?>
			</header><div class="ic">More Website Templates  at TemplateMonster.com!</div>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
    
    
        <?php
        include("../modelo/consultasCronograma.php");
        // try {


        $combo = $_POST["torneo"];
        $arraySubTorneos = $_POST["array"];
       

        // echo '<p>'.'id: '.$combo.'</p>';
        //echo '<p>'.'Array: '.$arraySubTorneos.'</p>';
        //var_dump($arraySubTorneos);
        $idSubTorneo = explode('-', $arraySubTorneos);
        
        //var_dump($idSubTorneo);
        // var_dump($inscritos);

        


        echo '<div class="body3">
		<div class="main">
                    <!-- content -->
			<article id="content">
                                 <form action="../modelo/generarPartidos.php" method="post">
                                 <input type="submit" value ="Enviar" class="submitbutton" >
				<h5>Partidos por Grupos </h5>';
				
        $longitud = sizeof($idSubTorneo);
        for ($i = 1; $i < $longitud; $i++) {

            
            crearPartidos($combo, $idSubTorneo[$i]);
        }
        
        

        echo'
        
        </article>
        </div>
        </div>';
        ?>
    
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
						<h4>Contacto</h4>
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
							<li><a href="#"><img src="../vista/images/icon1.jpg" alt="">Facebook</a></li>
							<li><a href="#"><img src="../vista/images/icon2.jpg" alt="">Twitter</a></li>
							<li><a href="#"><img src="../vista/images/icon3.jpg" alt="">LinkedIn</a></li>
							<li><a href="#"><img src="../vista/images/icon4.jpg" alt="">Delicious</a></li>
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



