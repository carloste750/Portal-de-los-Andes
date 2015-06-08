<!DOCTYPE html>
<?php 
	include_once '../Negocio/Categoria_BL.php';
	$valores;
	$OCategoria_BL=new Categoria_BL();
	$valores=$OCategoria_BL->Obtener($_GET("id")."");
	
 ?>
<html>
<head>
	<title>Portal de los Andes</title>
	<link rel="stylesheet" type="text/css" href="./Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/Estilos.css">
	<script  type="text/javascript" src="./Bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="./Bootstrap/js/bootstrap.js"></script>
	
	<meta charset="UTF-8">
</head>
<body class="container fuente1">
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<header >
		<div class="row">
			<img class="logo col-xs-12 sm-xs-4 col-md-6 col-lg-6" src="./Imagenes/Logo.png">
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<h2 class="fuente2 sombra-text-3 nounderline Titulo"><a href="#">Portal de los Ándes</a></h2>
				<h3 class="fuente3 sombra-text-2">No es la comida, es nuestro sabor!</h3>
			</div>
		</div>

		<div class="col-md-12 col-lg-12 adecuar barra">
			<nav class="navbar fuente1 ">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button " class="navbar-toggle collapsed fondo-Blanco" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only fondo-Plomo">Navegacion</span>
				        <span class="icon-bar fondo-Plomo"></span>
				        <span class="icon-bar fondo-Plomo"></span>
				        <span class="icon-bar fondo-Plomo"></span>
				      </button>
				      <a class="navbar-brand" href="Index.html">Inicio</a>
				    </div>


				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="sucursales.html">Sucursales <span class="sr-only">(current)</span></a></li>
				        <li><a href="carta.html">Carta</a></li>
				        
				      </ul>
				      
				      <ul class="nav navbar-nav navbar-right">
				      	<li><a href="Nosotros.html">Nosotros</a></li>
				        <li><a href="contactanos.html">Contáctanos  </a></li>
				      </ul>
				    </div>
				  </div>
			</nav>
		</div>
	</header>
	<content class="container contenido">
		<br>
		<div class="registro">
			<form action="../Negocio/Categoria_BL.php?accion=Grabar" method="POST">
				<div class="text-center form-gestion fuente5-n">
					<h1 class="fondo-Plomo">Registrar Categoria</h1>
					<table border="0" class="centrar ">
						<?php while($fila=mysql_fetch_array($valores)){ ?>
						<tr >
							<td class="text-right">Nombre:  </td>
							<td class="text-right"><input name="txtNombre" value="<?=$fila["nombre_categoria"]?>"  type="text" placeholder="Ingrese el nombre Categoria" size="45"></td>
						</tr>
						<tr>
							<td class="text-right">Categoria:</td>
							<td class="text-left"><input name="txtDescripcion"  value="<?=$fila["descripcion_categoria"]?>" type="text" placeholder="Ingrese la descripcion" size="25"></td>
						</tr>
						<?php } ?>
					</table>
					<br>
					<input name="btnAccion" type="submit" value="Grabar">
					<input name="btnLimpiar" type="reset" value="Limpiar">
				</div>
			</form>
		</div>
		<br>
	</content>

	<footer class="container" >
		<div class="row fuente5 foot">
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<strong class="fuente-Subtitulo">Portal de los Andes 2015:</strong><br>
				<strong class="fuente-Contenido">Todos los Derechos reservados</strong><br>
				<strong class="fuente-Contenido">¿Tienes alguna queja? escribenos a portal@correo.com</strong><br>
				<a href="LoginUsuario.php">Trabajo Aquí</a>
			</div>
			<div class="col-xs-12 sm-xs-8 col-lg-6 col-lg-6">
				<strong>Contactanos</strong>
			</div>
		</div>
		
	</footer>
</body>
</html>