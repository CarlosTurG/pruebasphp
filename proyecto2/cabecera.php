<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/estilos.css" />
<?php include_once("database/conexion.php"); ?>
<div id="cabecera">
	<div id="login">	
				<span><a href="registroUsuarioMejorado2.php">Quiero registrarme!</a></span><p>ACCESO USUARIOS</p>
				<form id="acceso" action="dologin.php" method="post">
				<div style="align:right">
				<table width="20px"><tbody>
				<tr>
					<td><span>Correo:</span></td>
					<td><input type="text" name="correo" size="15"/></td>
				</tr>
				<tr>
					<td><span>Clave:</span></td>
					<td><input type="password" name="clave" size="15"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="align:right"><input type="submit" value="ENVIAR"/></td>
				</tr>
			
				</tbody></table></div>
				</form>
</div></div>
<div id="contenedor">
