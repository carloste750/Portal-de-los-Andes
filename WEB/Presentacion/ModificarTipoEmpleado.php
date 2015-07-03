<!DOCTYPE html>
<?php 
	include_once '../Negocio/TipoEmpleado_BL.php';
	include_once '../Negocio/NivelAcceso_BL.php';
	$valores;
	$OTipoEmpleado_BL=new TipoEmpleado_BL();
	$valores=$OTipoEmpleado_BL->ObtenerTipoEmpleado($_GET["id"]);
	$fila=mysql_fetch_array($valores);
	$valoresn;
	$ONivelAcceso_BL=new NivelAcceso_BL();
	$valoresn=$ONivelAcceso_BL->ListaNivelAcceso("");
 ?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/TipoEmpleado_BL.php?accion=Modificar&id=<?=$_GET["id"] ?>" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Modificar TipoEmpleado: <?=$_GET["id"] ?></h1>
					<table border="0" class="centrar ">

						<tr >
							<td class="text-right">Tipo Empleado:  </td>
							<td class="text-right"><input name="txtDescripcion" value="<?=$fila["descripcion_tipo"]?>"  type="text" placeholder="Ej. Administrador" size="45"></td>
						</tr>
						<tr>
							<td class="text-right">Nivel de Acceso:</td>
							<td class="text-left">
								<SELECT name="lstNivel">
									<?php while($filan=mysql_fetch_array($valoresn)){ ?>
										<option value="<?=$filan["idNivel"] ?>"><?=$filan["nombre_Nivel"] ?></option>
									<?php } ?>
								</SELECT>
							</td>
						</tr>

					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Actualizar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarTipoEmpleado.php?accion=all">Lista...</a>
					</div>
					<br>
				</div>
			</form>
		</div>
		<br>
	</content>
	<?php include('./Templates/tmpFooter.php') ?> 
</body>
</html>