class="btn-success" <!DOCTYPE html>
<html>
	<?php include('./Templates/tmpHead.php'); 
		$mensaje=$_GET["mensaje"];	
	?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 

	<content class="col-md-12 contenido container">
		<br>
		<strong class="fuente5"><?=$mensaje?></strong>
		<hr>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/Sucursal_BL.php?accion=Grabar" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Registrar Sucursal</h1>
					<table border="0" class="centrar ">
						<tr >
							<td class="text-right">Imagen:  </td>
							<td class="text-right"><input name="txtImagen" type="text" placeholder="Ingrese la Imagen" size="60"></td>
						</tr>
						<tr>
							<td class="text-right">Direccion:</td>
							<td class="text-left"><input name="txtDireccion" type="text" placeholder="Ingrese la Direccion" size="62"></td>
						</tr>
					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Grabar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarSucursal.php?accion=all">Lista...</a>
					</div>
				</div>
			</form>
		</div>
		<br>
		
	</content>
	<?php include('./Templates/tmpAtrasMenu.php') ?> 
	<?php include('./Templates/tmpFooter.php') ?> 
	
</body>
</html>