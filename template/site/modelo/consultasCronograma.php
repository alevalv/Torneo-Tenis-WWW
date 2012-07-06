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
        asignarGrupo($obj["jugador_id"], $numero, $idTorneo, $idSubtorneo);

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
     $idSubtorneo;

    $result = $collectionTorneo->find(array("idcategoria_modalidad" => $idSubtorneo, "registrados_torneo_codigo" => $idTorneo))->sort(array("jugador_grupo" => -1)); //traigame todos los jugadores de ese subtorneo
    $i = 0;
    
    $grupoAnterior=-1;
    
    foreach ($result as $obj) {
        
        $grupo = (int) $obj["jugador_grupo"];
        
        if ($grupoAnterior != $grupo){
            
            $filas=$filas.'<tr class="winner">
        <td>'.''.'</td>
        <td>'.''.'</td>
                <td> <h5>'.'Grupo'.' </h5> </td>
                     <td> <h5>'. $obj["jugador_grupo"].'</h5></td>
                       <td>'.''.'</td>
        
            </tr>';
            
            $grupoAnterior=$grupo;
            
        }
        else
            {
        
        $filas=$filas.'<tr>
        <td>'.$obj["registrados_jugador_codigo"].'</td>
        <td>'.$obj["jugador_grupo"].'</td>
            <td>'.$obj["idcategoria_modalidad"].'</td>
                <td>'.$obj["jugador_ronda"].'</td>
                    <td>'.$obj["jugador_puntos"].'</td>
        
        </tr>';
        
        }
        
        $i++;
    }
    
    return $filas;
}

?>
