<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>


<?php $variables = $_POST["feed_item_length"]; ?>

<?php
$titulo = "Monki feo ";
hacer_encabezado($titulo);
?>

<body>




    <?php
    $cars[0] = "item1";
    $cars[1] = "item2";
    $cars[2] = "item3";
    $cars[3] = "item4";
    echo $cars[0] . " and " . $cars[1] . " are Swedish cars.";
    ?>


    <?php

    function hacer_encabezado($titulo) {
        $encabezado = "<html><head>t<title>$titulo</title></head>";
        echo $encabezado;
    }
    ?>

    <?php
    $env =
            json_decode(file_get_contents("/home/dotcloud/environment.json"), true);

    echo "<p>Application Name: {$env['DOTCLOUD_PROJECT']}</p>\n";
    //var_dump($env); //imprimir arreglo
    try {
        $conn = new Mongo("{$env['DOTCLOUD_DATA_MONGODB_URL']}");
        $db = $conn->torneotenis;
        echo "<p> Pase :<p>";

        $list = $db->listCollections();
        foreach ($list as $collection) {
            echo "borrando $collection... ";
            echo "se fue\n";
        }

        $coleccion = $db->jugador;
        $cursor = $coleccion->find();

        foreach ($cursor as $obj) {
            echo $obj["jugador_username"] . "\n";
        }
    } catch (MongoConnectionException $e) {
        echo '<p>Couldn\'t connect to mongodb, is the "mongo" process 
running?</p>';
        exit();
    }

//$coleccion = $db->jugadores;
//$almejo = $coleccion->findOne();
//dump($almejo);
//foreach($almejo as $item){
//echo $item['_id']; echo "<br />";
//echo $item['nombre']; echo "<br />";
//echo $item['apellido']; echo "<br />";
//}
    ?>


</body>
</html>
