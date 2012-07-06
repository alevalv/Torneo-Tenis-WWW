<?php
	
	function consultarPartidoActual(){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionPartido= $db->partidos_torneos;
		
		$dia = (int) date('d');
        $mes = (int) date('m');
        $anio = (int) date('Y');
		//$fecha = $dia.'-'.$mes.'-'.$anio;
		$fecha = '7-12-2012';
		echo "prueba";
		echo $fecha;
		$result = $collectionTorneo->find(array("partido_fecha" => $fecha));
                     
		var_dump($result);
		return $result;
		
			
	}
     
	 consultarPartidoActual();   
     
?>
