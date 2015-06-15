<!DOCTYPE html>
<html>
	<?php 
		include_once '../Negocio/TipoEmpleado_BL.php';
		include_once '../Negocio/Sucursal_BL.php';
		include('./Templates/tmpHead.php'); 

		$mensaje=$_GET["mensaje"];	
		$valortem;
		$OTipoEmpleado_BL=new TipoEmpleado_BL();
		$valortem=$OTipoEmpleado_BL->ListaTipoEmpleado("");

		$valorsuc;
		$OSucursal_BL=new Sucursal_BL();
		$valorsuc=$OSucursal_BL->ListaSucursal("");
	?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 

	<content class="col-md-12 contenido container">
		<br>
		<strong class="fuente5"><?=$mensaje?></strong>
		<hr>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/Empleado_BL.php?accion=Grabar" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Registrar Empleado</h1>
					<table border="0" class="centrar ">
						<tr>
							<td class="text-right">Nombre:</td>
							<td class="text-left"><input name="txtNombre" type="text" placeholder="Ej. Carlos." size="25"></td>
						</tr>
						<tr>
							<td class="text-right">Apellidos:</td>
							<td class="text-left"><input name="txtApellidos" type="text" placeholder="Ej. Vega Solis" size="25"></td>
						</tr>
						<tr>
							<td class="text-right">DNI:</td>
							<td class="text-left"><input name="txtDni" type="text" placeholder="Ej. Vega Solis" size="20"></td>
						</tr>
						<tr>
							<td class="text-right">Dirección:</td>
							<td class="text-left"><input name="txtDireccion" type="text" placeholder="Ej. Av. Palos 456" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Telefono:</td>
							<td class="text-left"><input name="txtTelefono" type="text" placeholder="Ej. Av. 986 0569856" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Email:</td>
							<td class="text-left"><input name="txtEmail" type="text" placeholder="Ej. Av. jorge@mail.com" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Usuario:</td>
							<td class="text-left"><input name="txtUsuario" type="text" placeholder="Ej. Av. jorge23" size="32"></td>
						</tr>
						<tr>
							<td class="text-right">Contraseña:</td>
							<td class="text-left"><input name="txtContrasenia" type="password" placeholder="Ingrese contraseña" size="48"></td>
						</tr>
						<tr>
							<td class="text-right">Tipo de Empleado:</td>
							<td class="text-left">
								<SELECT name="lstNivel">
									<?php while($fila=mysql_fetch_array($valortem)){ ?>
										<option value="<?=$fila["idtipo"] ?>"><?=$fila["descripcion_tipo"] ?></option>
									<?php } ?>
								</SELECT>
							</td>
						</tr>
						<tr>
							<td class="text-right">Sucursal:</td>
							<td class="text-left">
								<SELECT name="lstsucursal">
									<?php while($fila=mysql_fetch_array($valorsuc)){ ?>
										<option value="<?=$fila["idsucursal"] ?>"><?=$fila["direccion_Sucursal"] ?></option>
									<?php } ?>
								</SELECT>
							</td>
						</tr>
					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Grabar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarEmpleado.php?accion=all">Lista...</a>
					</div>

				</div>
				<br>
			</form>
		</div>
		<br>
		
	</content>
	
	<?php include('./Templates/tmpFooter.php') ?> 
	
</body>
</html>