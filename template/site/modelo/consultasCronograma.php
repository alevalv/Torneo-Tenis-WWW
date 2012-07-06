<?php

include("../controlador/fachada.php");

function asignarGrupoAjugadores($idTorneo, $idSubtorneo, $cantidadGrupos) {


    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->inscritos_torneos;
    $number = (int) $idSubtorneo;

    $result = $collectionTorneo->find(array("idcategoria_modalidad" => $number, "torneo_id" => $idTorneo)); //traigame todos los jugadores de ese subtorneo
    $i = 0;
    foreach ($result as $obj) {
        $numero = $i % $cantidadGrupos;
        if (!existeYa($obj["jugador_id"],$idTorneo,$idSubtorneo)){
        asignarGrupo($obj["jugador_id"], $numero, $idTorneo, $idSubtorneo);
        }

        // echo '<p> entre '.$obj["jugador_id"].'</p><br>';
        // echo '<p>'.$i % $cantidadGrupos.'</p><br>';
        $i++;
    }


    // echo '<p>'.$idTorneo.'----'.$idSubtorneo.'</p><br>';
    //codigo de los torneos con cronograma
    //var_dump($result);
    //return $result;
}

function asignarGrupo($id, $grupo, $id_torneo, $idSubtorneo) {

    $instancia = new fachada();
    $db = $instancia->conect();
    $collection = new MongoCollection($db, 'clasificacion_torneos');
    $newUser = array('registrados_jugador_codigo' => $id, 'registrados_torneo_codigo' => $id_torneo, 'idcategoria_modalidad' => $idSubtorneo, "jugador_ronda" => 1, "jugador_grupo" => $grupo,
        "jugador_puntos" => 0, "jugador_partidos_ganados" => 0,
        "jugador_partidos_empatados" => 0, "jugador_partidos_perdidos" => 0,
        "jugador_total_partidos_jugados" => 1, "jugador_puesto_actual" => 1, "categoria_ronda" => "A"
    );
    //var_dump($newUser);
    $collection->insert($newUser);
}

function generarTablaConGrupos($idSubtorneo,$idTorneo) {

    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->clasificacion_torneos;
   

    $result = $collectionTorneo->find(array("idcategoria_modalidad" => $idSubtorneo, "registrados_torneo_codigo" => $idTorneo))->sort(array("jugador_grupo" => -1)); //traigame todos los jugadores de ese subtorneo
    $i = 0;
    
    $grupoAnterior=-1;
    
    foreach ($result as $obj) {
        
        $grupo = (int) $obj["jugador_grupo"];
        
        if ($grupoAnterior != $grupo){
            
            $filas=$filas.'<tr class="winner">
        <td>'.''.'</td>
        <td>'.''.'</td>
                <td> <b>'.'Grupo'.'</b>  </td>
                     <td> <b> '. $obj["jugador_grupo"].'</b></td>
                       <td>'.''.'</td>
        
            </tr>';
            
            $grupoAnterior=$grupo;
            
        }
     
        
        $filas=$filas.'<tr>
        <td>'.$obj["registrados_jugador_codigo"].'</td>
        <td>'.$obj["jugador_grupo"].'</td>
            <td>'.$obj["idcategoria_modalidad"].'</td>
                <td>'.$obj["jugador_ronda"].'</td>
                    <td>'.$obj["jugador_puntos"].'</td>
        
        </tr>';
        
       
        
        $i++;
    }
    
    return $filas;
}

function existeYa($idjugador,$idTorneo,$idSubtorneo){
    
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->clasificacion_torneos;
   

    $result = $collectionTorneo->find(array("idcategoria_modalidad" => $idSubtorneo, "registrados_torneo_codigo" => $idTorneo , "registrados_jugador_codigo"=>$idjugador )); //traigame todos los jugadores de ese subtorneo
   
    
    if($result->count() != 0 ){return true; }
    else false;
    
    
}

function crearPartidos($combo, $idSubTorneo, &$indiceHora, &$vectorhoras ,&$indiceCancha,&$canchas,&$dia){
    
    
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->clasificacion_torneos;

    

    //$result = $collectionTorneo->find(array("idcategoria_modalidad" => $idSubtorneo, "registrados_torneo_codigo" => $idTorneo , "jugador_grupo"=>$idjugador )); //traigame todos los jugadores de ese subtorneo
   
    
    for ($i=0;true ;$i++){
        
         $result = $collectionTorneo->find(array("idcategoria_modalidad" => $idSubTorneo, "registrados_torneo_codigo" => $combo , "jugador_grupo"=>$i )); //traigame todos los jugadores de ese subtorneo
    
       
         
         $cantidad=$result->count();
         if($cantidad==0) break;
         $j=0;
         
        
         foreach ($result as $obj) {
             
             
             $idJugadores[$j] = $obj["registrados_jugador_codigo"];
             $j++;
            
             
             
         }
         
         generarPartidos($idJugadores,$idSubTorneo,$combo,1,$indiceHora, $vectorhoras ,$indiceCancha,$canchas,$dia);
         
        
         
         
         
        /* db.partidos_torneos.insert({'partido_codigo': '457', 'registrados_jugador1_codigo': '8796', 
                 'registrados_jugador2_codigo': '23789' , 'registrados_torneo_codigo': '12345' ,
                 'partido_ronda': '2', 'partido_fecha': '07-12-2012' , 'partido_hora': '02:06', 
                 'partido_cancha': '2', 'set_ganados_jugador1':'2', 'set_ganados_jugador2':'1',
                 'game1_jugador1':'6','game1_jugador2':'2','game2_jugador1':'2','game2_jugador2':'6'
             ,'game3_jugador1':'6','game3_jugador2':'2','partido_ganador':'1','partido_juez':'3456' })*/
 
         
    }
    
    }
    
    
    function generarPartidos($idJugadores,$idSubtorneo,$idTorneo,$ronda,&$indiceHora, &$vectorhoras ,&$indiceCancha,&$canchas,&$dia){
         $instancia = new fachada();
         $db = $instancia->conect();
         $collection = new MongoCollection($db, 'partidos_torneos');
    
        
        $cancha=1;
        $disponible=6;
        $dia=1;
        
        $numJugadores=sizeof($idJugadores);
        
        for ($i=0;$i<$numJugadores;$i++){
            
            for ($j=$i+1;$j<$numJugadores;$j++){
                
                if ($indiceCancha==$canchas ){
                    $dia++;
                    
                }
                
                
                if ($indiceHora== sizeof($vectorhoras)){
                    
                    $indiceHora=0;
                    $indiceCancha++;
                    
                }
                
                
                
             
                $doc = array( 'registrados_jugador1_codigo' => $idJugadores[$i],
             'registrados_jugador2_codigo' => $idJugadores[$j] , 'registrados_torneo_codigo' => $idTorneo ,
             'partido_ronda' => $ronda, 'partido_fecha' => $dia , 'partido_hora'=>$vectorhoras[$indiceHora],
             'partido_cancha' => $indiceCancha, 'set_ganados_jugador1' => 0, 'set_ganados_jugador2' => 0, 
             'game1_jugador1' => 0,'game1_jugador2' => 0,'game2_jugador1' => 0,
             'game2_jugador2' => 0,'game3_jugador1' => 0,'game3_jugador2' => 0,
             'partido_ganador' => "0","idcategoria_modalidad" => $idSubtorneo);
                
                $collection->insert($doc);
                
                $indiceHora++;
                
            }
        
            
            
        }
        
         
        
    }
    
    


?>
