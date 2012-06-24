<?php
		include("../modelo/consultas.php");
		try{
		$cursor = consultarJugadoresCategoriaOrdenadosRanking("novato",125632

);

		


		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	
?>