<?php

function consultarTorneoSinCronograma() {
    include("../controlador/fachada.php");
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->torneo;

    $result = $collectionTorneo->find(array("tiene_cronograma" => "no"));

    //codigo de los torneos con cronograma
    //var_dump($result);
    return $result;
}

function consultarTorneosDisponibles() {
    include("../controlador/fachada.php");
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->torneo;


    $dia = (int) date('d');
    $mes = (int) date('m');
    $anio = (int) date('Y');
    //echo $dia . '-' . $mes . '-' . $anio;
    $result = $collectionTorneo->find(array(
        '$or' =>
        array(
            array("torneo_fecha_inicio_anio" => array('$gt' => $anio)),
            array("torneo_fecha_inicio_anio" => array('$gte' => $anio), "torneo_fecha_inicio_mes" => array('$gt' => $mes)),
            array("torneo_fecha_inicio_anio" => array('$gte' => $anio), "torneo_fecha_inicio_mes" => array('$gte' => $mes), "torneo_fecha_inicio_dia" => array('$gte' => $dia))
        )


            //array(array("torneo_fecha_inicio_anio" => array('$gte' => $anio ) , "torneo_fecha_inicio_mes" => array('$gte' => $mes ), "torneo_fecha_inicio_dia" => array('$gte' => $dia ) )  )
            )
    );

    //  "torneo_fecha_inicio_mes" => array('$gte' => $mes ),"torneo_fecha_inicio_anio" => array('$gte' => $anio )  ,
    //$db->users->find(array('$or' => array(array("a" => 1), array("b" => 2) )));
    //codigo de los torneos con cronograma
    //var_dump($result);
    return $result;
}

function generarArraySubTorneos($idtorneo) {
    include("../controlador/fachada.php");
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->inscritos_torneos;


    /*$arrayCategorias = array(
        1 => "Novato",
        2=> "Categoria 1",
        3 => "Categoria 2",
        4=> "Categoria 3",
        5 => "Categoria 4",);
       
      */  
      
    // $db->users->find(array("age" => array('$gt' => 30)))->count();

    
    for ($i = 1; $i < 16; $i++) 
    {
        $result = $collectionTorneo->find(array("torneo_id" => $idtorneo, "idcategoria_modalidad" => $i));
        
        $array [$i]= $result->count();
        
      
    
    }
    

    //codigo de los torneos con cronograma
    
    return $array;
}

function  getTorneo($combo) {
    
    $instancia = new fachada();
    $db = $instancia->conect();
    $collectionTorneo = $db->torneo;

    

    $theObjId = new MongoId($combo); 
    
    
    
    $result = $collectionTorneo->findOne(array('_id' => $theObjId));
    
    

    /*foreach ($result as $obj) {

       //$torneo= $obj;
      echo '<p>torneo num '. $obj["torneo_num_jugadores" ]."/<p>" ;
    }*/

    //codigo de los torneos con cronograma
    
    return $result;
}


?>
