 

<?php

function consultarJugadorUserName($user){
    include("../controlador/fachada.php");
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->jugador;

    $result = $collectionTorneo->find(array("jugador_username" => $user));

    //codigo de los torneos con cronograma
    //var_dump($result);
    return $result;
}

function consultarJugadorUsernameCall($name){
	$result_query = consultarJugadorUserName($name);
	$result;
	foreach ($result_query as $doc) {
		$result = $doc;
		break;
    }
    //echo $result["juez_username"];
    return $result;
}

function insertarInscritoBD($id_jugador, $id_torneo) {
    
    $instancia = new fachada();
		$db = $instancia->conect();
		$collection= new MongoCollection($db, 'inscritos_torneos');
		$newUser = array('jugador_id'=>$id_jugador ,'torneo_id' => $id_torneo);
                $collection->insert($newUser);
    //codigo de los torneos con cronograma
    //var_dump($result);
    return 0;
}
?>
