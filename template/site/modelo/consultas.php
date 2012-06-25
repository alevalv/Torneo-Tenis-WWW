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
                
                echo date('m');
		
		$result = $collectionTorneo->find(array("torneo_fecha_inicio_dia" => array('$gte' => date('d') ) ,
                    "torneo_fecha_inicio_mes" => array('$gte' => date('m') ),"torneo_fecha_inicio_anio" => array('$gte' => date('y') ) ));
		
		//codigo de los torneos con cronograma
		//var_dump($result);
		return $result;
		
			
	}
        
        
?>
