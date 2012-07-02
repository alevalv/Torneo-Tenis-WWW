<?php
	
	function consultarTorneoSinCronograma(){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionTorneo= $db->torneo;
		
		$result = $collectionTorneo->find(array("tiene_cronograma" => "no"));
		
		//codigo de los torneos con cronograma
		//var_dump($result);
		return $result;
		
			
	}
        
        function consultarTorneosDisponibles(){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionTorneo= $db->torneo;
                
                
                $dia = (int) date('d');
                $mes = (int) date('m');
                $anio = (int) date('Y');
		echo $dia.'-'.$mes.'-'.$anio;
		$result = $collectionTorneo->find(array(
                    '$or' => 
                    array(
                        array("torneo_fecha_inicio_anio" => array('$gt' => $anio )  ) ,
                        array("torneo_fecha_inicio_anio" => array('$gte' => $anio ) , "torneo_fecha_inicio_mes" => array('$gt' => $mes ) ),
                        array("torneo_fecha_inicio_anio" => array('$gte' => $anio ) , "torneo_fecha_inicio_mes" => array('$gte' => $mes ), "torneo_fecha_inicio_dia" => array('$gt' => $dia ) )
                        
                        )
                    
                    
                    //array(array("torneo_fecha_inicio_anio" => array('$gte' => $anio ) , "torneo_fecha_inicio_mes" => array('$gte' => $mes ), "torneo_fecha_inicio_dia" => array('$gte' => $dia ) )  )
                     
                    
                    )  
                        );
                
              //  "torneo_fecha_inicio_mes" => array('$gte' => $mes ),"torneo_fecha_inicio_anio" => array('$gte' => $anio )  ,
                
                //$db->users->find(array('$or' => array(array("a" => 1), array("b" => 2) )));
		
		//codigo de los torneos con cronograma
		//var_dump($result);
		return $result;
		
			
	}
        
     
        
        
        
        
        
?>
