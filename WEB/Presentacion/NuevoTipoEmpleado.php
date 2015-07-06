<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<html>
	<?php 
		include('./Templates/tmpHead.php'); 
	?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 

	<content class="col-md-12 contenido container">
		<br>
		<strong class="fuente5"><?=$mensaje?></strong>
		<hr>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/TipoEmpleado_BL.php?accion=Grabar" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Registrar Tipo de Empleado</h1>
					<table border="0" class="centrar ">
						<tr>
							<td class="text-right">TipoEmpleado:</td>
							<td class="text-left"><input name="txtDescripcion" type="text" placeholder="Ej. Administrador." size="25"></td>
						</tr>
					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Grabar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarTipoEmpleado.php?accion=all">Lista...</a>
					</div>

				</div>
				<br>
			</form>
		</div>
		<br>
		
	</content>
	
	<?php include('./Templates/tmpFooter.php') ?> 
	
</body>
</html>