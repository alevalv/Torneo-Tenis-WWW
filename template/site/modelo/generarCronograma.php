<?php
		include("../modelo/consultas.php");
		try{
		$cursor = consultarTorneoSinCronograma();
			

		


		}
		catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	
?>