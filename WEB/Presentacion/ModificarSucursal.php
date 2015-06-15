<!DOCTYPE html>
<?php 
	include_once '../Negocio/Sucursal_BL.php';
	$valores;
	$OSucursal_BL=new Sucursal_BL();
	$valores=$OSucursal_BL->ObtenerSucursal($_GET["id"]);
	$fila=mysql_fetch_array($valores);
 ?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<div class="registro">
			<form action="../Negocio/Sucursal_BL.php?accion=Modificar&id=<?=$_GET["id"] ?>" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Modificar Sucursal: <?=$_GET["id"] ?></h1>
					<table border="0" class="centrar ">

						<tr >
							<td class="text-right">Nombre:  </td>
							<td class="text-right"><input name="txtImagen" value="<?=$fila["nombre_Sucursal"]?>"  type="text" placeholder="Ingrese el Imagen Sucursal" size="60"></td>
						</tr>
						<tr>
							<td class="text-right">Sucursal:</td>
							<td class="text-left"><input name="txtDireccion"  value="<?=$fila["direccion_Sucursal"]?>" type="text" placeholder="Ingrese la direccion" size="45"></td>
						</tr>

					</table>
					<br>
					<input name="btnAccion" type="submit" value="Actualizar">
					<input name="btnLimpiar" type="reset" value="Limpiar">
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