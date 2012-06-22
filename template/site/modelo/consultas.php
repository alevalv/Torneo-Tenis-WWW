<?php
	function consultarJugadoresCategoriaOrdenadosRanking($categoria){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collection= $db->jugador;		
		return $collection->find(array('jugador_categoria' => $categoria))->sort({'jugador_ranking' : 1});
		//1 es asendentemente , -1 es desendentemente
	}
	
	function consultarTorneoSinCronograma(){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionTorneo= $db->torneo;
		$collectionPartidos_torneos= $db->partidos_torneos;
		
		
		//codigo de los torneos con cronograma
		//$result = $collectionPartidos_torneos->find()->fields(array("registrados_torneo_codigo" => true));
		
			
	}
?>
