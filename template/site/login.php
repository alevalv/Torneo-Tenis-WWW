<html>
	<head>
		<title>Autentificacion PHP</title>
	</head>
	<body>
		<h1>Autentificacion PHP</h1>
		<form action="autenticar.php" method="POST">
			<table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
				<tr>
					<td colspan="2" align="center"
						<?php if ($_GET["errorusuario"]=="si"){
							 echo 'bgcolor=red><span style="color:ffffff"><b>Datos incorrectos</b></span>';
						}else{
							echo 'bgcolor=#cccccc>Introduce tu clave de acceso';
						}?></td>
				</tr>
				<tr>
					<td align="right">USER:</td>
					<td><input type="Text" name="username" size="8" maxlength="50"></td>
				</tr>
				<tr>
					<td align="right">PASSWD:</td>
					<td><input type="password" name="password" size="8" maxlength="50"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="Submit" value="ENTRAR"></td>
				</tr>
			</table>
		</form>
	</body>
</html> 
