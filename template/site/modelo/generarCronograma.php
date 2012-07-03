<html>

    <?php
    include("../modelo/consultasTorneo.php");
    try {
        
        $partidos = $_POST["partidos"];
        $combo = $_POST["combo"];
        echo '<p>'.'entre'.$partidos.$combo.'</p>';
        
        $arraySubTorneos = generarArraySubTorneos($combo);// en este array tendremos el id del subtorneo y tendremos 'si' si supero el minimo de jugadores y no de los contrario 
        
        $Torneo =getMinimoParaGenerarTorneo($combo);//es el valor que se ingresa al crear el torneo y sirve para decidir si un torneo se lleva a cabo, esto se hace distinguiendo modalidad categoria teniedo en cuenta que estos generan otro torneo
        $minimoParaGenerarTorneo=$Torneo["torneo_num_jugadores"];
        
        echo 'numero::'.$minimoParaGenerarTorneo;
        
        
        
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    ?>

</html>