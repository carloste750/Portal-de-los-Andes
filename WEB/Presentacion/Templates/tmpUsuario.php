<?php 
	include_once '../Negocio/Sesion_BL.php';
	$oSesion=new Sesion_BL();

	if(isset($_SESSION["estado"])){
		if(isset($_SESSION["estado"])==true){
			?>
			<h4 class="fuente5"><?=$_SESSION["nombre_cliente"]." "?><a  class="btn-success fuente5 fuente-Contenido" href="../Negocio/Sesion_BL.php?accion=logout">SALIR</a></h4>
		
			<?
		}else{

		}
	}
	if(!isset($_SESSION["estado"])){ 
		?>
		<a  class="btn-success fuente5 fuente-Contenido" href="LoginCliente.php?mensaje=&accion=all">INGRESAR</a>
		<a  class="btn-success fuente5 fuente-Contenido" href="LoginCliente.php?mensaje=&accion=all">REGISTRARME</a>
	<?php } 
	
 ?>
 