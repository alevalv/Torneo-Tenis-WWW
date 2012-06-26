<?php
function InsertarInscritoBD($id_jugador ,$id_torneo){
include("../controlador/fachada.php");
try {
    echo 'inscrito insert';
    $instancia = new fachada();
    $db = $instancia->conect();
    $collection = new MongoCollection($db, 'inscritos_torneos');
    $newUser = array('jugador_id'=> $id_jugador, 'torneo_id' => $id_torneo );
    $collection->insert($newUser);
    header("Location: ../vista/index.php");
    exit();
} catch (Exception $e) {
//echo 'Caught exception: ',  $e->getMessage(), "\n";
}

header("Location: ../vista/ingresarJuez.php?errorusuario=si");

}
?>