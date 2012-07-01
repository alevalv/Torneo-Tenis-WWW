<?php

function consultarJuezUserName($juez) {
    include("../controlador/fachada.php");
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->juez;

    $result_query = $collectionTorneo->find(array("juez_username" => $juez));
	$result;
	foreach ($result_query as $doc) {
		$result = $doc;
		break;
    }
    //echo $result["juez_username"];
    return $result;
}
//consultarJuezUserName("alvaro");
?>
