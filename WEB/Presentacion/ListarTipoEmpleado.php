<!DOCTYPE html>
<?php 
	include_once '../Negocio/TipoEmpleado_BL.php';
	$valores;
	$OTipoEmpleado_BL=new TipoEmpleado_BL();
	if($_GET["accion"]=="buscar"){
		if($_POST["txtbuscar"]!=null){
			$valores=$OTipoEmpleado_BL->ListaTipoEmpleado($_POST["txtbuscar"]);
		}else{
			$valores=$OTipoEmpleado_BL->ListaTipoEmpleado("");
		}
	}
	if($_GET["accion"]=="all"){
		$valores=$OTipoEmpleado_BL->ListaTipoEmpleado("");
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
			<form action="ListarTipoEmpleado.php?accion=buscar" method="POST">
				<div class="text-center form-gestion">
					<div  class="fondo-Plomo text-right">
						<br>
							Tipos de Empleado
							<input name="txtbuscar" type="text" placeholder="Buscar...">
							<input name="btnbuscar" type="submit" value="Buscar">
						<br>
						<br>
					</div>
					
					<table class=" centrar table table-hover" border="1" width="100%">
						<thead>
							<tr>
								<th class="text-center" >Descripcion Empleado</th>
								<th class="text-center">Id Nivel</th>
								<th class="text-center">Modificar</th>
								<th class="text-center">Eliminar</th>
							</tr>
						</thead>
						<tbody>

							<?php while($fila=mysql_fetch_array($valores)){ ?>
							<tr class="cnegro fondo-Blanco" height="auto">
								<td width="25%" ><?=$fila["descripcion_tipo"] ?></td>
								<td ><?=$fila["idnivel"] ?></td>
								<td class="modificar"><a href="ModificarTipoEmpleado.php?id=<?=$fila["idtipo"] ?>&accion=none">Modificar</a></td>
								<td class="eliminar"><a class="beliminar" href="../Negocio/TipoEmpleado_BL.php?accion=Eliminar&id=<?=$fila["idtipo"] ?>">Eliminar</a></td>
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