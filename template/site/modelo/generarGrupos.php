<html>


    <head>
        <title>Torneos</title>
        <meta charset="utf-8">


        <link rel="stylesheet" href="../vista/css/table.css" type="text/css" media="all">



        <link href="../vista/css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body id="page4">

        <?php
        include("../modelo/consultasCronograma.php");
        // try {


        $combo = $_POST["torneo"];
        $arraySubTorneos = $_POST["array"];
        $arrayInscritos = $_POST["inscritos"];

        // echo '<p>'.'id: '.$combo.'</p>';
        //echo '<p>'.'Array: '.$arraySubTorneos.'</p>';
        //var_dump($arraySubTorneos);
        $idSubTorneo = explode('-', $arraySubTorneos);
        $inscritos = explode('-', $arrayInscritos);
        //var_dump($idSubTorneo);
        // var_dump($inscritos);

        $longitud = sizeof($idSubTorneo);
        for ($i = 1; $i < $longitud; $i++) {

            $number = (int) $inscritos[$i];

            $cantidadDeGrupos = ceil($number / 4);
            // echo '<p>'.$i .'---'.$idSubTorneo[$i].'</p><br>';

            asignarGrupoAjugadores($combo, $idSubTorneo[$i], $cantidadDeGrupos);
        }






        /* for ($i=1;$i < $longitud;$i++){




          // echo '<p>'.$i .'---'.$idSubTorneo[$i].'</p><br>';

          generarTablaPorSubCategoria($combo,$idSubTorneo[$i]);

          } */


        echo '<div class="body3">
		<div class="main">
                    <!-- content -->
			<article id="content">
				<h5>Nombre Torneo: Categoria</h5>
				<div class="wrapper tabs">
					<h3> Rondas: </h3>
					<ul class="nav">';



        for ($i = 1; $i < $longitud; $i++) {


            echo '<li><a href="#tab' . $idSubTorneo[$i] . '">Categoria : ' . $idSubTorneo[$i] . '</a></li>';
        }
        echo '</ul>
        <p> <br></p>';


        for ($i = 1; $i < $longitud; $i++) {




            echo '<div class="tab-content" id="tab' . $idSubTorneo[$i] . '">';

            echo '<p> <br> </p><h1> Mostrar los partidos de esta fase</h1><p> <br> </p>
        <table cellspacing="0" cellpadding="0">
        <col style="width: 200px" />
        <col style="width: 100px" span="3" />
        <tr>
        <th >Jugadores</th>
        <th >Game 1</th>
        <th >Game 2</th>
        <th >Game 3</th>
        </tr>';
            echo generarTablaConGrupos($idSubTorneo[$i], $combo);

            echo '</table>
        </div>';
        }

        /* echo '<div class="tab-content" id="tab1">
          <p> <br> </p><h1> Mostrar los partidos de esta fase</h1><p> <br> </p>
          <table cellspacing="0" cellpadding="0">
          <col style="width: 200px" />
          <col style="width: 100px" span="3" />
          <tr>
          <th >Jugadores</th>
          <th >Game 1</th>
          <th >Game 2</th>
          <th >Game 3</th>
          </tr>
          <tr class="winner">
          <td>Nombre 1</td>
          <td>6</td>
          <td>1</td>
          <td>7</td>
          </tr>
          <tr>
          <td>Nombre 2</td>
          <td>4</td>
          <td>6</td>
          <td>5</td>
          </tr>
          </table>
          </div>'; */




        echo'</div>
        </div>
        </article>
        </div>
        </div>';
        ?>

    </body >
</html>