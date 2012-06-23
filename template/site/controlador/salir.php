<?php
	session_start();
	if($_SESSION["rol"]=="juezmovil"){
		session_destroy();
		echo '<html><body><script type="text/javascript">window.location="../aplicacion-movil/index.php";</script></body> </html>';
	}else{
		session_destroy();
		header("Location: ../vista/index.php");
	}
?> 
