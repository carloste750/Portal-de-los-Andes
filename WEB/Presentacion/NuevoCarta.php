<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<html>
	<?php 
		include_once '../Negocio/Carta_BL.php';
		include_once '../Negocio/Horario_BL.php';
		include('./Templates/tmpHead.php'); 

		$mensaje=$_GET["mensaje"];	
		$valorcat;
		$OHorario_BL=new Horario_BL();
		$valorcat=$OHorario_BL->ListaHorario("");
	?> 
<body class="container fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 

	<content class="col-md-12 contenido container">
		<br>
		<strong class="fuente5"><?=$mensaje?></strong>
		<hr>
		<?php include('./Templates/tmpAtrasMenu.php') ?> 
		<div class="registro">
			<form action="../Negocio/Carta_BL.php?accion=Grabar" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Registrar Carta</h1>
					<table border="0" class="centrar ">
						<tr>
							<td class="text-right">Mensaje:</td>
							<td class="text-left"><input name="txtnombre" type="text" placeholder="Ej. Pachamanca." size="32"></td>
						</tr>
						<tr>
							<td class="text-right">Horario:</td>
							<td class="text-left">
								<SELECT name="lstHorario">
									<?php while($fila=mysql_fetch_array($valorcat)){ ?>
										<option value="<?=$fila["idhorario"] ?>"><?=$fila["nombre_Horario"] ?></option>
									<?php } ?>
								</SELECT>
								<a  class="btn-success fuente-Contenido" href="NuevoHorario.php?mensaje=">+ Nuevo</a>
								
							</td>
						</tr>
						
					</table>
					<br>
					<input class="btn-success" name="btnAccion" type="submit" value="Grabar">
					<input class="btn-success" name="btnLimpiar" type="reset" value="Limpiar">
					<div class="text-right">
						<a class="btn-success fuente5 fuente-contenido" href="./ListarCarta.php?accion=all">Lista...</a>
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