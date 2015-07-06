<?php include('./Templates/tmpSession.tpl.php') ?> 
<?php 
/**
* Code by CJ
*/

	$red=new Redireccionar();
	if($_GET["accion"]="msj"){
		$red->Enviarmensaje($_GET["url"],$_GET["mensaje"]);
	}
	class Redireccionar
	{
		function __construct()
		{
			
		}
		public function Enviarmensaje($direccion,$mensaje){
			header("Location:./PRESENTACION/$direccion?mensaje=$mensaje");
		}
	}
 ?>