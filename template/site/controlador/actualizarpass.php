<?php
	include("../controlador/fachada.php");
	$instancia = new fachada();
	$db = $instancia->conect();
	$collection= new MongoCollection($db, 'admin');
	$data = array('$set' => array("admin_password" => md5("12345")));
	$collection->update(array("admin_password" => "12345"), $data, array("multiple" => true)); 
	//echo "prueba";
	$collection= new MongoCollection($db, 'jugador');
	$data = array('$set' => array("jugador_password" => md5("prueba")));
	$collection->update(array("jugador_password" => "prueba"), $data, array("multiple" => true));
	$data = array('$set' => array("jugador_password" => md5("")));
	$collection->update(array("jugador_password" => ""), $data, array("multiple" => true));     
    
	
	$collection= new MongoCollection($db, 'juez');
	$data = array('$set' => array("juez_password" => md5("12345")));
	$collection->update(array("juez_password" => "12345"), $data, array("multiple" => true));
	
	echo "exito";

?>
