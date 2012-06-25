<html>

    <?php
    include("../modelo/consultas.php");
    try {
        
        $partidos = $_POST["partidos"];
        $combo = $_POST["combo"];
        echo '<p>'.'entre'.$partidos.$combo.'</p>';
        
        
        
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
    ?>

</html>