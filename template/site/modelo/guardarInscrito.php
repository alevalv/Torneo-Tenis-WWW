<html>

    <?php
    include("../modelo/consultarJugador.php");
   
    try {

        session_start();

        $user = $_SESSION["username"];
        $combo = $_POST["combo"];
        
        $result = consultarJugadorUserName($user);


        
          foreach ($result as $obj) {

            $idJugador=$obj['_id'];
        }
        
        echo $idJugador;
        
        
        $info = insertarInscritoBD($idJugador,$combo);

        
        //$instancia = new fachada();
        //$db = $instancia->conect();
        //$collection = new MongoCollection($db, 'inscritos_torneos');

        //$newUser = array('jugador_id'=> $result['_id'], 'torneo_id' => $combo );
        //$collection->insert($newUser);
        //header("Location: ../vista/jugador.php");
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    ?>

</html>