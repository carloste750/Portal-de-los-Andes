<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<?php 
	$mensaje="";
	if(isset($_GET["mensaje"])){
		$mensaje=$_GET["mensaje"];
	}
 ?>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	<?php include('./Templates/tmpHeader.php') ?> 

	<content class="col-md-12 col-lg-12 text-center fuente5">
		<h1 class="text-left"><?=$mensaje ?></h1>
			<hr>
		<form action="../Negocio/Cliente_BL.php?accion=Verificar" method="POST">
			<div >
				 <h2 >LOGIN</h2>
				 <input name="txtusuario" type="Text" value="" placeholder="Usuario" /><br>
				 <input name="txtcontraseña" type="Password" value="" placeholder="Contraseña" /><br>
				 <input name="btnacceder" class="adecuar" type="submit" value="ACCEDER" text="ACCEDER" />
				 <h2 class="fuente5"><a href="Registrarme">Olvide Mi contraseña</a></h2>
				 <h2 class="fuente5"><a href="Nuevocliente.php">Registrarme</a></h2>
			</div>
		</form>
	</content>
	<?php include('./Templates/tmpFooter.php') ?> 
</body>
</html>