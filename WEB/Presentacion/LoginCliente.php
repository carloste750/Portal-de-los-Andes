<!DOCTYPE html>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	<?php include('./Templates/tmpHeader.php') ?> 

	<content class="col-md-12 col-lg-12 text-center">
		<div >
			 <h2 class="fuente3">LOGIN</h2>
			 <input id="txtusuario" type="Text" value="" placeholder="Usuario" /><br>
			 <input id="txtcontraseña" type="Password" value="" placeholder="Contraseña" /><br>
			 <input id="btnacceder" class="fuente3 adecuar" type="submit" value="ACCEDER" text="ACCEDER" />
			 <h2 class="fuente3"><a href="Registrarme">Olvide Mi contraseña</a></h2>
			 <h2 class="fuente3"><a href="Registrarme">Registrarme</a></h2>
		</div>
	</content>
	<?php include('./Templates/tmpFooter.php') ?> 
</body>
</html>