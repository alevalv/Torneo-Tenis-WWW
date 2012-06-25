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
?>
