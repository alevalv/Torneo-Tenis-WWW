<html>

    <?php
    include("../modelo/consultasTorneo.php");
    try {
        
        $partidos = $_POST["partidos"];
        $combo = $_POST["combo"];
        echo '<p>'.'entre'.$partidos.$combo.'</p>';
        
        $arraySubTorneos = generarArraySubTorneos($combo);// en este array tendremos el id del subtorneo y tendremos 'si' si supero el minimo de jugadores y no de los contrario 
        
        
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    ?>

</html>