<!DOCTYPE html>
<?php 
	include_once '../Negocio/NivelAcceso_BL.php';
	$valores;
	$ONivelAcceso_BL=new NivelAcceso_BL();
	$valores=$ONivelAcceso_BL->ObtenerNivelAcceso($_GET["id"]);
	$fila=mysql_fetch_array($valores);
 ?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<div class="registro">
			<form action="../Negocio/NivelAcceso_BL.php?accion=Modificar&id=<?=$_GET["id"] ?>" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Modificar NivelAcceso: <?=$_GET["id"] ?></h1>
					<table border="0" class="centrar ">

						<tr >
							<td class="text-right">Nombre:  </td>
							<td class="text-right"><input name="txtNombre" value="<?=$fila["nombre_nivel"]?>"  type="text" placeholder="Ej. Control Total" size="45"></td>
						</tr>
						<tr>
							<td class="text-right">Descripcion:</td>
							<td class="text-left"><input name="txtDescripcion"  value="<?=$fila["descripcion_nivel"]?>" type="text" placeholder="Ej. Es el acceso con mayor privilegio." size="25"></td>
						</tr>

					</table>
					<br>
					<input name="btnAccion" type="submit" value="Actualizar">
					<input name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarNivelAcceso.php?accion=all">Lista...</a>
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