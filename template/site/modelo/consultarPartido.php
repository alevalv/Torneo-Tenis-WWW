<?php

function consultarPartido($id, $juezId){
	include("../controlador/fachada.php");
	$instancia = new fachada();
    $db = $instancia->conect();
    $collectionPartido = $db->partidos_torneos;
    $theObjId = new MongoId($id);
    $result = $collectionPartido->findOne(array("_id" => $theObjId, "partido_juez" => $juezId));
    if(is_null($result)){
		$result = $collectionPartido->findOne(array("_id" => $theObjId, "partido_juez" => array('$exists' => false)));
	}
    return $result;
}

function consultarMisPartidos($jugador){
	include("../controlador/fachada.php");
	$instancia = new fachada();
    $db = $instancia->conect();
    $collectionPartido= new MongoCollection($db, 'partidos_torneo');
    $query =  array ('$and' => array( '$or' => array('registrados_jugador1_codigo' => '4ff5fd1b8946d2a900000000', 'registrados_jugador2_codigo' => '4ff5fd1b8946d2a900000000') , 'partido_ganador' => '0'));
    $result = $collectionPartido->find($query);
	return $result;
}
?>
