<!DOCTYPE html>
<?php 
	include_once '../Negocio/Empleado_BL.php';
	$valores;
	$OEmpleado_BL=new Empleado_BL();
	if($_GET["accion"]=="buscar"){
		if($_POST["txtbuscar"]!=null){
			$valores=$OEmpleado_BL->ListaEmpleado($_POST["txtbuscar"]);
		}else{
			$valores=$OEmpleado_BL->ListaEmpleado("");
		}
	}
	if($_GET["accion"]=="all"){
		$valores=$OEmpleado_BL->ListaEmpleado("");
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
			<form action="ListarEmpleado.php?accion=buscar" method="POST">
				<div class="text-center form-gestion">
					<div  class="fondo-Plomo text-right">
						<br>
							Empleados
							<input name="txtbuscar" type="text" placeholder="Buscar...">
							<input name="btnbuscar" type="submit" value="Buscar">
						<br>
						<br>
					</div>
					
					<table class=" centrar table table-hover" border="1" width="100%">
						<thead>
							<tr>
								<th class="text-center" >Nombre Empleado</th>
								<th class="text-center">Apellidos Empleado</th>
								<th class="text-center">DNI</th>
								<th class="text-center">E-Mail</th>
								<th class="text-center">Usuario</th>
								<th class="text-center" >Tipo de Empleado</th>
								<th class="text-center">Modificar</th>
								<th class="text-center" >Eliminar</th>
							</tr>
						</thead>
						<tbody>

							<?php while($fila=mysql_fetch_array($valores)){ ?>
							<tr class="cnegro fondo-Blanco" height="auto">
								<td width="25%" ><?=$fila["nombre_Empleado"] ?></td>
								<td ><?=$fila["apellido_Empleado"] ?></td>
								<td ><?=$fila["dni_Empleado"] ?></td>
								<td ><?=$fila["email_Empleado"] ?></td>
								<td ><?=$fila["usuario_Empleado"] ?></td>
								<td ><?=$fila["tipo_empleado_idtipoempleado"] ?></td>
								<td class="modificar"><a href="ModificarEmpleado.php?id=<?=$fila["idEmpleado"] ?>&accion=none">Modificar</a></td>
								<td class="eliminar"><a class="beliminar" href="../Negocio/Empleado_BL.php?accion=Eliminar&id=<?=$fila["idEmpleado"] ?>">Eliminar</a></td>
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