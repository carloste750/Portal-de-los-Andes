<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<?php 
	include_once '../Negocio/Categoria_BL.php';
	include_once '../Negocio/NivelAcceso_BL.php';
	$valores;
	$OCategoria_BL=new Categoria_BL();
	$valores=$OCategoria_BL->ObtenerCategoria($_GET["id"]);
	$fila=mysql_fetch_array($valores);
 ?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/Categoria_BL.php?accion=Modificar&id=<?=$_GET["id"] ?>" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Modificar Categoria: <?=$_GET["id"] ?></h1>
					<table border="0" class="centrar ">

						<tr >
							<td class="text-right">Nombre:  </td>
							<td class="text-right"><input name="txtNombre" value="<?=$fila["nombre_categoria"]?>"  type="text" placeholder="Ingrese el nombre Categoria" size="45"></td>
						</tr>
						<tr>
							<td class="text-right">Categoria:</td>
							<td class="text-left"><input name="txtDescripcion"  value="<?=$fila["descripcion_categoria"]?>" type="text" placeholder="Ingrese la descripcion" size="25"></td>
						</tr>

					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Actualizar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarCategoria.php?accion=all">Lista...</a>
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