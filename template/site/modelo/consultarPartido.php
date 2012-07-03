<?php

function consultarPartido($id, $juezId){
	include("../controlador/fachada.php");
	$instancia = new fachada();
    $db = $instancia->conect();
    $collectionPartido = $db->partidos_torneos;
    $theObjId = new MongoId($id); 
    $result = $collectionPartido->findOne(array("_id" => $theObjId, "partido_juez" => $juezId));
    return $result;
}

?>
