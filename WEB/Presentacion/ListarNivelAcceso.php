<!DOCTYPE html>
<?php 
	include_once '../Negocio/NivelAcceso_BL.php';
	$valores;
	$ONivelAcceso_BL=new NivelAcceso_BL();
	if($_GET["accion"]=="buscar"){
		if($_POST["txtbuscar"]!=null){
			$valores=$ONivelAcceso_BL->ListaNivelAcceso($_POST["txtbuscar"]);
		}else{
			$valores=$ONivelAcceso_BL->ListaNivelAcceso("");
		}
	}
	if($_GET["accion"]=="all"){
		$valores=$ONivelAcceso_BL->ListaNivelAcceso("");
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
			<form action="ListarNivelAcceso.php?accion=buscar" method="POST">
				<div class="text-center form-gestion">
					<div  class="fondo-Plomo text-right">
						<br>
							NivelAcceso
							<input name="txtbuscar" type="text" placeholder="Buscar...">
							<input name="btnbuscar" type="submit" value="Buscar">
						<br>
						<br>
					</div>
					
					<table class=" centrar table table-hover" border="1" width="100%">
						<thead>
							<tr>
								<th class="text-center" >Nombre del Nivel Acceso</th>
								<th class="text-center">Descripcion</th>
								<th class="text-center">Modificar</th>
								<th class="text-center">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php while($fila=mysql_fetch_array($valores)){ ?>
							<tr class="cnegro fondo-Blanco" height="auto">
								<td width="25%" ><?=$fila["nombre_Nivel"] ?></td>
								<td ><?=$fila["descripcion_Nivel"] ?></td>
								<td class="modificar"><a href="ModificarNivelAcceso.php?id=<?=$fila["idNivel"] ?>&accion=none">Modificar</a></td>
								<td class="eliminar"><a class="beliminar" href="../Negocio/NivelAcceso_BL.php?accion=Eliminar&id=<?=$fila["idNivel"] ?>">Eliminar</a></td>
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