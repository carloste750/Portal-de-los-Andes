<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<html>
<head>
	<?php include('./Templates/tmpHead.php'); ?>
</head>
<body class="container fuente1">
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="col-md-12 contenido">
		<div>
			<form action="../Negocio/Cliente_BL.php?accion=Grabar" method="POST">
			<br>
				<div class="text-center form-gestion fuente5  marco">
					<h2 class="fuente">Ingresa tus Datos</h2>
					<hr>
					<table border="0" class="centrar fuente5ph ">
						<tr>
							<td class="text-right">Nombre:</td>
							<td class="text-left"><input name="txtnombre" type="text" placeholder="Ej. Carlos." size="25"></td>
						</tr>
						<tr>
							<td class="text-right">Apellidos:</td>
							<td class="text-left"><input name="txtapellido" type="text" placeholder="Ej. Vega Solis" size="25"></td>
						</tr>
						<tr>
							<td class="text-right">DNI:</td>
							<td class="text-left"><input name="txtdni" type="text" placeholder="Ej. 65898754" size="20"></td>
						</tr>
						<tr>
							<td class="text-right">Telefono:</td>
							<td class="text-left"><input name="txttelefono" type="text" placeholder="Ej. 987653424 " size="20"></td>
						</tr>
						<tr>
							<td class="text-right">E-mail:</td>
							<td class="text-left"><input name="txtemail" type="text" placeholder="Ej. carlos@gmail.com" size="20"></td>
						</tr>
						<tr>
							<td class="text-right">Nombre de Cuenta:</td>
							<td class="text-left"><input name="txtusuario" type="text" placeholder="Ej. carlos56" size="20"></td>
						</tr>
						<tr>
							<td class="text-right">Contraseña:</td>
							<td class="text-left"><input name="txtcontrasenia" type="password" placeholder="********" size="20"></td>
						</tr>
					</table>
					<br>
						<hr>
						<input class="btn-success " name="btnAccion" type="submit" value="Registrarme">
						<input class="btn-success " name="btnLimpiar" type="reset" value="Limpiar">
					
				</div>
			</form>
		</div>
		<br>
	</content>
	<?php include('./Templates/tmpFooter.php') ?> 
</body>
</html>