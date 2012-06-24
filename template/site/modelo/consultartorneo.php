<?php

		include("../controlador/fachada.php");		
		$instancia = new fachada();
		$db = $instancia->conect();
		$collectionTorneo= $db->torneo;
		$collection_torneos= $db->torneo;
		$cursor=$collection_torneos->find();
		
		var_dump($cursor);
		
		foreach($cursor as $r){
		   var_dump($r);
		}
?>
