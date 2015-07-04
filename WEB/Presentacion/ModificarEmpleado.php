<!DOCTYPE html>
<?php 
	include_once '../Negocio/TipoEmpleado_BL.php';
	include_once '../Negocio/Empleado_BL.php';

	$valores;
	$OEmpleado_BL=new Empleado_BL();
	$valores=$OEmpleado_BL->ObtenerEmpleado($_GET["id"]);
	$fila=mysql_fetch_array($valores);

	$mensaje=$_GET["mensaje"];	
	$valortem;
	$OTipoEmpleado_BL=new TipoEmpleado_BL();
	$valortem=$OTipoEmpleado_BL->ListaTipoEmpleado("");


 ?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content class="container contenido">
		<br>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/Empleado_BL.php?accion=Modificar&id=<?=$_GET["id"] ?>" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Modificar El Empleado: <?=$_GET["id"] ?></h1>
					<table border="0" class="centrar ">
						<tr>
							<td class="text-right">Nombre:</td>
							<td class="text-left"><input name="txtNombre" value="<?=$fila["nombre_empleado"] ?>" type="text" placeholder="Ej. Carlos." size="25"></td>
						</tr>
						<tr>
							<td class="text-right">Apellidos:</td>
							<td class="text-left"><input name="txtApellidos" value="<?=$fila["apellido_empleado"] ?>" type="text" placeholder="Ej. Vega Solis" size="25"></td>
						</tr>
						<tr>
							<td class="text-right">DNI:</td>
							<td class="text-left"><input name="txtDni" value="<?=$fila["dni_empleado"] ?>" type="text" placeholder="Ej. Vega Solis" size="20"></td>
						</tr>
						<tr>
							<td class="text-right">Dirección:</td>
							<td class="text-left"><input name="txtDireccion" value="<?=$fila["direccion_empleado"] ?>" type="text" placeholder="Ej. Av. Palos 456" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Telefono:</td>
							<td class="text-left"><input name="txtTelefono" value="<?=$fila["telefono_empleado"] ?>" type="text" placeholder="Ej. Av. 986 0569856" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Email:</td>
							<td class="text-left"><input name="txtEmail" value="<?=$fila["email_empleado"] ?>" type="text" placeholder="Ej. Av. jorge@mail.com" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Usuario:</td>
							<td class="text-left"><input name="txtUsuario" value="<?=$fila["usuario_empleado"] ?>" type="text" placeholder="Ej. Av. jorge23" size="32"></td>
						</tr>
						<tr>
							<td class="text-right">Contraseña:</td>
							<td class="text-left"><input name="txtContrasenia" value="<?=$fila["contraseña_empleado"] ?>" type="password" placeholder="Ingrese contraseña" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Tipo de Empleado:</td>
							<td class="text-left">
								<SELECT name="lstTipoempleado">
									<?php while($fila=mysql_fetch_array($valortem)){ ?>
										<option value="<?=$fila["idtipo"] ?>"><?=$fila["descripcion_tipo"] ?></option>
									<?php } ?>
								</SELECT>
							</td>
						</tr>
						
					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Actualizar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarEmpleado.php?accion=all">Lista...</a>
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