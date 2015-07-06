<?php include('./Templates/tmpSession.tpl.php') ?> 
<!DOCTYPE html>
<html>

	<?php include('./Templates/tmpHead.php') ?> 

<body class="container contenido fuente1">
	
	<?php include('./Templates/tmpHeader.php') ?> 
	<content >
		<div id="slide" class="carousel slide clearfix ">
			<ol class="carousel-indicators">
				<li data-target="#slide" data-slide-to="0" class="active"></li>
				<li data-target="#slide" data-slide-to="1"></li>
				<li data-target="#slide" data-slide-to="2"></li>
				<li data-target="#slide" data-slide-to="3"></li>
				<li data-target="#slide" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active"><img src="Imagenes/slide/img1.jpg" class="Adecuar presentacion"></div>
				<div class="item"><img src="Imagenes/slide/img2.jpg" class="Adecuar presentacion"></div>
				<div class="item"><img src="Imagenes/slide/img3.jpg" class="Adecuar presentacion"></div>
				<div class="item"><img src="Imagenes/slide/img4.jpg" class="Adecuar presentacion"></div>
				<div class="item"><img src="Imagenes/slide/img5.jpg" class="Adecuar presentacion"></div>
			</div>
			<div >
				<a href="reservar.php"><button  class="btn-registrar btn-success fuente3">Reservar</button></a>
			</div>
		</div>
		<hr>
		
		
		
		<div>
			<h1 class="text-center sombra-text-3">Nuestras Especialidades</h1>
			<div class="container">
				<div class="fuente3 col-md-4 col-lg-4 col-xm-4 col-sm-4 text-center">
					<img class="previewplato" src="Imagenes/Vistaprevia/Arrozpollo.jpg" alt="">
					<hr>
					<h3 >* Arroz con Pollo *</h3>
				</div >
				<div class="fuente3 col-md-4 col-lg-4 col-xm-4 col-sm-4 text-center">
					<img class="previewplato" src="Imagenes/Vistaprevia/sudado-de-trucha.jpg" alt="">
					<hr>
					<h3>* Sudado de trucha *</h3>
				</div>
				<div  class="fuente3 col-md-4 col-lg-4 col-xm-4 col-sm-4 text-center">
					<img  class="previewplato" src="Imagenes/Vistaprevia/cau cau.jpg" alt="">
					<hr>
					<h3>* Cau Cau *</h3>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="fuente3 col-md-4 col-lg-4 col-xm-4 col-sm-4 text-center">
					<img class="previewplato" src="Imagenes/Vistaprevia/gallina dorada.jpg" alt="">
					<hr>
					<h3>* Gallina dorada *</h3>
				</div>
				<div  class="fuente3 col-md-4 col-lg-4 col-xm-4 col-sm-4 text-center">
					<img class="previewplato" src="Imagenes/Vistaprevia/pollo-a-la-parrilla.jpg" alt="">
					<hr>
					<h3>* Pollo a la Parrilla *</h3>
				</div>
				<div  class="fuente3 col-md-4 col-lg-4 col-xm-4 col-sm-4 text-center">
					<img class="previewplato" src="Imagenes/Vistaprevia/escabeche.jpg" alt="">
					<hr>
					<h3>* Escabeche *</h3>
				</div>
			</div>
			<br>
			<div class="text-right fuente5 success">
				<button class=" btn-success fuente3">+ Más</button>
			</div>
			<br>
			
		</div>

		<div class="text-center">
			<h1  class="fuente3 ">Encuéntranos</h1>
				<hr>
				<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.6972125358369!2d-77.52929867605721!3d-9.527065900185944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a90d11b88b2349%3A0xc9d37d107d88a492!2sJos%C3%A9+De+La+Mar+437%2C+Huaraz!5e0!3m2!1ses!2spe!4v1433708199188" width="100%" height="450" frameborder="0" style="border:0"></iframe>
				<hr>
				<h3 class="fuente3 text-right" >JR. José de la Mar nro. 437 –Huaraz- Ancash</h3>
		</div>
	</content>

	<?php include('./Templates/tmpFooter.php') ?> 
</body>
</html>