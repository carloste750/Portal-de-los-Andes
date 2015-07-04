<!DOCTYPE html>
<?php 
	include_once '../Negocio/Categoria_BL.php';
	include_once '../Negocio/Plato_BL.php';

	$valores;
	$OPlato_BL=new Plato_BL();
	$valores=$OPlato_BL->ObtenerPlato($_GET["id"]);
	$fila=mysql_fetch_array($valores);

	$mensaje=$_GET["mensaje"];	
	$valorcat;
	$OCategoria_BL=new Categoria_BL();
	$valorcat=$OCategoria_BL->ListaCategoria("");


 ?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/Plato_BL.php?accion=Modificar&id=<?=$_GET["id"] ?>" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Modificar El Plato: <?=$_GET["id"] ?></h1>
					<table border="0" class="centrar ">
						<tr>
							<td class="text-right">Nombre:</td>
							<td class="text-left"><input name="txtnombre" value="<?=$fila["nombre_plato"] ?>"  type="text" placeholder="Ej. Pachamanca." size="32"></td>
						</tr>
						<tr>
							<td class="text-right">Descripcion:</td>
							<td class="text-left"><input name="txtdescripcion" type="text" placeholder="Ej. Un potaje con papas y Carne" value="<?=$fila['descripcion_plato'] ?>"  size="50"></td>
						</tr>
						<tr>
							<td class="text-right">Costo:</td>
							<td class="text-left"><input name="txtcosto"  value="<?=$fila["costo_plato"] ?>" type="text" placeholder="Ej. 20.00" size="10"></td>
						</tr>
						<tr>
							<td class="text-right">Preview:</td>
							<td class="text-left"><input name="txtimagen" value="<?=$fila["imagen_plato"] ?>"  type="text" placeholder="Ingrese la URL de imagen" size="48"></td>
						</tr>
						
						<tr>
							<td class="text-right">Categoria:</td>
							<td class="text-left">
								<SELECT name="lstcategoria">
									<?php while($fila=mysql_fetch_array($valorcat)){ ?>
										<option value="<?=$fila["idtipo"] ?>"><?=$fila["nombre_categoria"] ?></option>
									<?php } ?>
								</SELECT>
								<a  class="btn-success fuente-Contenido" href="NuevoCategoria.php?mensaje=">+ Nuevo</a>
								
							</td>
						</tr>
						
					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Actualizar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarPlato.php?accion=all">Lista...</a>
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