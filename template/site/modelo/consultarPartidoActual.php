<?php
	
	function consultarPartidoActual(){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionPartido= $db->partidos_torneos;
		
		$dia = (int) date('d');
        $mes = (int) date('m');
        $anio = (int) date('Y');
		
		$result = $collectionTorneo->find(array("partido_fecha" => $fecha));
                     
		
		return $result;
		
			
	}
        
        
?>
