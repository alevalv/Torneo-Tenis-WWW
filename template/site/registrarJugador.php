<?php
	include(fachada.php);
	if(isset($_POST['send']){
		$fachada= new fachada();
		$db = $fachada.connect();
		$db.jugador.insert({'jugador_codigo': $_POST['jugador_codigo'], 'jugador_username': $_POST['jugador_username'], 'jugador_password':$_POST['jugador_password'],'jugador_es_pareja' : false,'jugador_nombre1':$_POST['jugador_nombre'],'jugador_sexo1': $_POST['jugador_sexo'], 'jugador_categoria':$_POST['jugador_categoria'],'jugador_ranking':1});
	}
?>
