<?php
class fachada
{
  	function conect(){
  	
  	@ $env = json_decode(file_get_contents("/home/dotcloud/environment.json"), true);
  	
  	//echo "<p>Application Name: {$env['DOTCLOUD_PROJECT']}</p>\n";
  	try{
  	  	$conn = new Mongo("{$env['DOTCLOUD_DATA_MONGODB_URL']}");
  	  	$db = $conn->torneotenis;
  	  	
  	  	return $db;
		  	  	
  	}
  	catch ( MongoConnectionException $e ) 
  	{
		echo 	'<p>
					Couldn\'t connect to mongodb, is the "mongo" process running?
				</p>';
		exit();
  	}
  	
  	}	
}
?>
