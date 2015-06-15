<!DOCTYPE html>
<?php 
	include_once '../Negocio/Sucursal_BL.php';
	$valores;
	$OSucursal_BL=new Sucursal_BL();
	if($_GET["accion"]=="buscar"){
		if($_POST["txtbuscar"]!=null){
			$valores=$OSucursal_BL->ListaSucursal($_POST["txtbuscar"]);
		}else{
			$valores=$OSucursal_BL->ListaSucursal("");
		}
	}
	if($_GET["accion"]=="all"){
		$valores=$OSucursal_BL->ListaSucursal("");
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
			<form action="ListarSucursal.php?accion=buscar" method="POST">
				<div class="text-center form-gestion">
					<div  class="fondo-Plomo text-right">
						<br>
							Sucursal
							<input name="txtbuscar" type="text" placeholder="Buscar...">
							<input name="btnbuscar" type="submit" value="Buscar">
						<br>
						<br>
					</div>
					
					<table class=" centrar table table-hover" border="1" width="100%">
						<thead>
							<tr>
								<th class="text-center" >Imagen Sucursal</th>
								<th class="text-center">Direccion</th>
								<th class="text-center">Modificar</th>
								<th class="text-center">Eliminar</th>
							</tr>
						</thead>
						<tbody>

							<?php while($fila=mysql_fetch_array($valores)){ ?>
							<tr class="cnegro fondo-Blanco" height="auto">
								<td width="25%" ><img width="80px" heigt="70px" src="<?=$fila["imagen_Sucursal"] ?>"></td>
								<td><?=$fila["direccion_Sucursal"]; ?></td>
								<td class="modificar"><a href="ModificarSucursal.php?id=XD&accion=none">Modificar</a></td>
								<td class="eliminar"><a class="beliminar" href="../Negocio/Sucursal_BL.php?accion=Eliminar&id=<?=$fila["idsucursal"] ?>">Eliminar</a></td>
								<?=$fila["idsucursal"]?>
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