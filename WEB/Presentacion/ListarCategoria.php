<!DOCTYPE html>
<?php 
	include_once '../Negocio/Categoria_BL.php';
	$valores;
	$OCategoria_BL=new Categoria_BL();
	if($_GET["accion"]=="buscar"){
		if($_POST["txtbuscar"]!=null){
			$valores=$OCategoria_BL->ListaCategoria($_POST["txtbuscar"]);
		}else{
			$valores=$OCategoria_BL->ListaCategoria("");
		}
	}
	if($_GET["accion"]=="all"){
		$valores=$OCategoria_BL->ListaCategoria("");
	}
?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<div class="registro">
			<form action="ListarCategoria.php?accion=buscar" method="POST">
				<div class="text-center form-gestion">
					<div  class="fondo-Plomo text-right">
						<br>
							CATEGORIAS
							<input name="txtbuscar" type="text" placeholder="Buscar...">
							<input name="btnbuscar" type="submit" value="Buscar">
						<br>
						<br>
					</div>
					
					<table class=" centrar table table-hover" border="1" width="100%">
						<thead>
							<tr>
								<th class="text-center" >Nombre Categoria</th>
								<th class="text-center">Descripcion</th>
								<th class="text-center">Modificar</th>
								<th class="text-center">Eliminar</th>
							</tr>
						</thead>
						<tbody>

							<?php while($fila=mysql_fetch_array($valores)){ ?>
							<tr class="cnegro fondo-Blanco" height="auto">
								<td width="25%" ><?=$fila["nombre_categoria"] ?></td>
								<td ><?=$fila["descripcion_categoria"] ?></td>
								<td class="modificar"><a href="ModificarCategoria.php?id=<?=$fila["idcategoria"] ?>&accion=none">Modificar</a></td>
								<td class="eliminar"><a class="beliminar" href="../Negocio/Categoria_BL.php?accion=Eliminar&id=<?=$fila["idcategoria"] ?>">Eliminar</a></td>
							</tr>
							<?php } ?>
						</tbody>

					</table>
					
				</div>
			</form>
		</div>
		<br>
	</content>

	<?php include('./Templates/tmpFooter.php') ?> 
</body>
</html>