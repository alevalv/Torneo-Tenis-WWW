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
       $arraySubTorneos=$_POST["array"];
       $arrayInscritos=$_POST["inscritos"];
       
       // echo '<p>'.'id: '.$combo.'</p>';
        //echo '<p>'.'Array: '.$arraySubTorneos.'</p>';
        
        //var_dump($arraySubTorneos);
        $idSubTorneo = explode('-',$arraySubTorneos);
        $inscritos= explode('-',$arrayInscritos);
         //var_dump($idSubTorneo);
         
        // var_dump($inscritos);
         
         echo '<p>'.sizeof($idSubTorneo).'</p><br>';
         $longitud=sizeof($idSubTorneo);
         for ($i=1;$i < $longitud;$i++){
             
             $number=(int ) $inscritos[$i];
             
             $cantidadDeGrupos = ceil($number/4);
            // echo '<p>'.$i .'---'.$idSubTorneo[$i].'</p><br>';
             
             asignarGrupoAjugadores($combo,$idSubTorneo[$i],$cantidadDeGrupos);
             
             
         }
        
        
        /*$arraySubTorneos = generarArraySubTorneos($combo);// en este array tendremos el id del subtorneo y tendremos 'si' si supero el minimo de jugadores y no de los contrario 
        
        $Torneo =getTorneo($combo);//es el valor que se ingresa al crear el torneo y sirve para decidir si un torneo se lleva a cabo, esto se hace distinguiendo modalidad categoria teniedo en cuenta que estos generan otro torneo
       
        //var_dump($Torneo);
        
        $minimoParaGenerarTorneo=$Torneo["torneo_num_jugadores"];
        
        echo '<div class="tab-content" id="tab1">
						<p> <br> </p><h1> Inscritos  a Torneo : '.$Torneo["torneo_nombre"].'</h1>
                                                    <p> <h2> N&uacutemero M&iacutenimo Para Jugar Torneo:  '.$minimoParaGenerarTorneo.'</h2>
                                                    
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
          $seJuega=$Inscritos>$minIns ;
          
          if($seJuega){
              $jugar="Si se Juega";
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

   
        echo ' <input type="button" value ="Siguiente" onClick="generarGrupos.php" >';
        
        
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }*/
    ?>

        </body >
</html>