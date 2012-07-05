<?php
        include("../controlador/fachada.php");	
     function asignarGrupoAjugadores($idTorneo,$idSubtorneo,$cantidadGrupos){
         
			
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionTorneo= $db->inscritos_torneos;
		
		$result = $collectionTorneo->find(array("idcategoria_modalidad" => $idSubtorneo , "torneo_id"=>$idTorneo ));//traigame todos los jugadores de ese subtorneo
                $i=0;
                foreach ($result as $obj) {
                      //asignarGrupo ($obj["jugador_id"], $i % $cantidadGrupos, $idTorneo,$idSubtorneo ) ;
                      
                      echo '<p>'.$obj["jugador_id"].'</p><br>';
                      echo '<p>'.$i % $cantidadGrupos.'</p><br>';
                     $i++;
                    }
                
		
                echo '<p>'.$idTorneo.'----'.$idSubtorneo.'</p><br>';
	
		//codigo de los torneos con cronograma
		var_dump($result);
		//return $result;
         	
			
	}
        
        function asignarGrupo($id,$grupo,$id_torneo,  $idSubtorneo ){
            
                $instancia = new fachada();
		$db = $instancia->conect();
		$collection= new MongoCollection($db, 'clasificacion_torneos');
		$newUser = array('registrados_jugador_codigo'=>$id ,'registrados_torneo_codigo' => $id_torneo,'idcategoria_modalidad' => $idSubtorneo ,"jugador_ronda"=>1,"jugador_grupo" => $grupo, 
                        "jugador_puntos" => 0, "jugador_partidos_ganados" => 0, 
                    "jugador_partidos_empatados" => 0, "jugador_partidos_perdidos" => 0,
                    "jugador_total_partidos_jugados" => 1, "jugador_puesto_actual" => 1, "categoria_ronda" => "A" 
                    
                    );
                $collection->insert($newUser);
            
			
	}
        
        


        
?>
