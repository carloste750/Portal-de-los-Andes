<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<?php 
	include_once '../Negocio/Plato_BL.php';
	$valores;
	$OPlato_BL=new Plato_BL();
	if($_GET["accion"]=="buscar"){
		if($_POST["txtbuscar"]!=null){
			$valores=$OPlato_BL->ListaPlato($_POST["txtbuscar"]);
		}else{
			$valores=$OPlato_BL->ListaPlato("");
		}
	}
	if($_GET["accion"]=="all"){
		$valores=$OPlato_BL->ListaPlato("");
	}
?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="ListarPlato.php?accion=buscar" method="POST">
				<div class="text-center form-gestion">
					<div  class="fondo-Plomo text-right">
						<br>
							Platos
							<input name="txtbuscar" type="text" placeholder="Buscar...">
							<input name="btnbuscar" type="submit" value="Buscar">
						<br>
						<br>
					</div>
					
					<table class=" centrar table table-hover" border="1" width="100%">
						<thead>
							<tr>
								<th class="text-center" >Nombre Plato</th>
								<th class="text-center">Descripcion Plato</th>
								<th class="text-center">Costo</th>
								<th class="text-center">Imagen</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">Modificar</th>
								<th class="text-center">Eliminar</th>
							</tr>
						</thead>
						<tbody>

							<?php while($fila=mysql_fetch_array($valores)){ ?>
							<tr class="cnegro fondo-Blanco" height="auto">
								<td width="25%" ><?=$fila["nombre_Plato"] ?></td>
								<td ><?=$fila["descripcion_Plato"] ?></td>
								<td ><?=$fila["costo_Plato"] ?></td>
								<td ><img class="miniplato" src="<?=$fila["imagen_Plato"] ?>" alt=""></td>
								<td ><?=$fila["categoria_Plato"] ?></td>
								<td class="modificar"><a href="ModificarPlato.php?id=<?=$fila["idplato"] ?>&accion=none">Modificar</a></td>
								<td class="eliminar"><a class="beliminar" href="../Negocio/Plato_BL.php?accion=Eliminar&id=<?=$fila["idplato"] ?>">Eliminar</a></td>
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