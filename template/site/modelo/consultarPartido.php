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
	$jugador = "{$jugador}";
	$collectionPartido= new MongoCollection($db, 'partidos_torneos');
    $query =  array('$and' => array(
								array('$or' => array(
									array("registrados_jugador1_codigo" => $jugador),
									array("registrados_jugador2_codigo" => $jugador))),
								array("partido_ganador" => "0")));
    $result = $collectionPartido->find($query);
    return $result;
}
?>
