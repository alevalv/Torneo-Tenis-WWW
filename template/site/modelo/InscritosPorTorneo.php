

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
    <?php
    include("../modelo/consultasTorneo.php");
    try {
        
        $partidos = $_POST["partidos"];
        $combo = $_POST["combo"];
        //echo '<p>'.'entre'.$partidos.$combo.'</p>';
        
        $arraySubTorneos = generarArraySubTorneos($combo);// en este array tendremos el id del subtorneo y tendremos 'si' si supero el minimo de jugadores y no de los contrario 
        
        $Torneo =getTorneo($combo);//es el valor que se ingresa al crear el torneo y sirve para decidir si un torneo se lleva a cabo, esto se hace distinguiendo modalidad categoria teniedo en cuenta que estos generan otro torneo
       
        //var_dump($Torneo);
        
        $minimoParaGenerarTorneo=$Torneo["torneo_num_jugadores"];
        
        echo '<div class="tab-content" id="tab1">
						<p> <br> </p><h1> Inscritos  a Torneo : '.$Torneo["torneo_nombre"].'</h1>
                                                    <p> <h2> N&uacutemero M&iacutenimo Para Jugar Torneo:  '.$minimoParaGenerarTorneo.'</h2>
                                                        <form action="../modelo/generarGrupos.php" method="post">
            <input value ="'.$combo.'" name="torneo" type="hidden"  >
            <input value ="'.$TorneosQueSeJuegan.'" name="array" type="hidden"  >
            <input value ="'.$IncritosQueJuegan.'" name="inscritos" type="hidden"  >
            <input type="submit" value ="Enviar" class="submitbutton" >
            </form>
                                                    
                                                        <br> 
                                                    </p>
						<table >
							
							<tr>
								<th >Categoria/Modalidad</th>
								<th >Inscritos</th>
								<th >Decisi&oacuten</th>
								
							</tr>';
        
        //"<p>El vector con indice $c tiene el valor $v </p>";
      foreach($arraySubTorneos as $c=>$v){
          
          $minIns=(int )  $minimoParaGenerarTorneo;
          $Inscritos=(int) $v;
          $seJuega=$Inscritos>$minIns;
          
          if($seJuega){
              $jugar="Si se Juega";
              $TorneosQueSeJuegan=$TorneosQueSeJuegan."-".$c ;
              $IncritosQueJuegan=$IncritosQueJuegan.'-'.$Inscritos;
          }
          else { $jugar="No se Juega";}
          
          echo '
              <tr >
								
                            <td>'.$c.'</td>
                            <td>'.$v.'</td>
			    <td>'. $jugar. '</td>
								
               </tr>';

      }



    echo'</table> </div> ';

   
       ;
        
        
        
        
        
        
        
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    ?>
             
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
                            

        </body >
</html>