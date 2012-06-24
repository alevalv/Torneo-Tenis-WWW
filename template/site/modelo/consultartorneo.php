<?php

		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionTorneo= $db->torneo;
		$collectionPartidos_torneos= $db->partidos_torneos;
		$cursor=$collectionPartidos_torneos->find();
		
		var_dump($cursor);
		
		foreach($cursor as $r){
		   var_dump($r);
		}
?>
