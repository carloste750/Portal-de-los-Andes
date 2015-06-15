	<script  type="text/javascript" src="./Bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="./Bootstrap/js/bootstrap.js"></script>


	<header >
	<div class="row">
		<div class="col-xs-10 col-sm-3 col-md-2 col-lg-2">
			<img href="Index.html" class="logo" src="./Imagenes/Logo.png">
		</div>
		<div class="col-xs-10 col-sm-7 col-md-8 col-lg-8">
			<h2 class="fuente2 sombra-text-3 nounderline deslizar" ><a class="titulo" href="./Index.php">Portal de los Ándes</a></h2>
			<h3 class="fuente3 sombra-text-2 deslizar">No es la comida, es nuestro sabor!</h3>
		</div>
		<?php include ('tmpUsuario.php') ?>
	</div>       
	

	<?php include ('tmpMenu.php'); ?>
</header>