<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<html>
	<?php include('./Templates/tmpHead.php') ?> 
<body class="container fuente1">
	<?php include('./Templates/tmpHeader.php') ?> 

	<content class="col-md-12 col-lg-12 text-center">
		<div >
			 <h2 class="fuente5">LOGIN USUARIO</h2>
			 <input class="fuente5" id="txtusuario" type="Text" value="" placeholder="Usuario" /><br>
			 <input class="fuente5" id="txtcontraseña" type="Password" value="" placeholder="Contraseña" /><br>
			 <input id="btnacceder" class="fuente5 adecuar" type="submit" value="ACCEDER" text="ACCEDER" />
		</div>
	</content>
	<?php include('./Templates/tmpFooter.php') ?> 
</body>
</html>