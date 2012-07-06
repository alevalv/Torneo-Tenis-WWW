<?php
	
	function consultarPartidoActual(){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionPartido= $db->partidos_torneos;
		
		$dia = (int) date('d');
        $mes = (int) date('m');
        $anio = (int) date('Y');
		
		$result = $collectionTorneo->find(array(
                    '$or' => 
                    array(
                        array("torneo_fecha_inicio_anio" => $anio , "torneo_fecha_inicio_mes" => $mes , "torneo_fecha_inicio_dia" => $dia )
                        )
		
		return $result;
		
			
	}
        
        
?>
