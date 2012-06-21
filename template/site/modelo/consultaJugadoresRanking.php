<?php
	function consultarJugadoresOrdenadosRanking(){
		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collection= $db->jugador;		
		return $collection->find()->sort({'jugador_ranking' : 1});
		//1 es asendentemente , -1 es desendentemente
	}		
?>
