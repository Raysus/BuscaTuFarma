<!DOCTYPE html>
<html lang="en">
	<head>
    	<!--
    	Boxer Template
    	http://www.templatemo.com/free-website-templates/446-boxer
    	-->
		<meta charset="utf-8">
		<title>Busca tu Farma</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/optional.css">
		<!-- custom css -->
		<link rel="stylesheet" href="css/templatemo-style.css">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
	<script src="js/googleMap.js">

	</script>
	</head>
	<body onload="LoadGmaps()" onunload="GUnload()">
		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div>
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="pull-left"><img src="images/logo.jpg" style="position: inherit; height: 80px;"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<li><a href="#home">Inicio</a></li>
						<li><a href="#feature">Medicamentos</a></li>
						<li><a href="#download">Ubicación</a></li>
						<li><a href="#contact">Contacto</a></li>
						<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login</a></span>
          <form role="form" class="dropdown-menu" action="login/login.php" method="post" id="login">
            <div class="form-group">
              <label for="text">Usuario:</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
              <div id="estadoLogIn"></div>
              <button id="login_button" type="submit" class="btn btn-default">Ingresar</button>
            </form>
          </li>
					<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"></span> Agregar Medicamento</a></span>
				<form role="form" class="dropdown-menu" action="scripts/agregar.php" method="post" id="agregar">
					<div class="form-group">
						<label for="text">Nombre Generico:</label>
						<input type="text" class="form-control" name="Nombre_activo">
					</div>
					<div class="form-group">
						<label for="pwd">Nombre Medicamento:</label>
						<input type="text" class="form-control" name="password">
					</div>
					<div class="form-group">
						<label for="pwd">Tipo de Medicamento:</label>
						<input type="text" class="form-control" name="password">
					</div>
						<div id="estadoAgregar"></div>
						<button id="agregar_button" type="submit" class="btn btn-default">Agregar Medicamento</button>
					</form>
				</li>
					</ul>
				</div>

			</div>
		</nav>
		<!-- end navigation -->



		<!-- start home -->
		<section id="home">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-7 col-md-offset-4 wow fadeIn" data-wow-delay="0.3s">
							<h1 class="text-upper">Farmacia Populares </h1>
							<p class="tm-white">Los mejores precios para la comunidad.
							<a href="#" class="pull-left"><img src="" style="position: inherit; height: 80px;"></a>

						</div>
						<div class="col-md-0"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- end home -->
		<!-- start divider -->
		<!-- end divider -->

		<!-- start pricing -->
		<section id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounceIn">
						<h1 class="text-uppercase" style="color: white; margin-bottom:60px;">Medicamentos</h1>
					</div>
					<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">
						<div class="pricing text-uppercase">
						</div>
						<form name="form1" action="index.php" method="post" id="cdr">
				      <input name="busca" type="text" id="busqueda">
				      <input type="submit" name="submit" value="Buscar">
							<?php
							$busca="";
							$busca=$_POST['busca'];
							$db = new mysqli("localhost" ,"root", "","medicamentos");
							if($busca!=""){
							  $busqueda=mysql_query("select * from medicamentos where Nombre_activo like '%".$busca."%'");
							}
							?>


					</div>
		</section>

		<!-- end pricing -->

		<!-- start download -->
		<section id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInLeft" data-wow-delay="0.6s" >
						<h2 class="text-uppercase">Ubicación</h2>


						<div id="MyGmaps" style="width:100%;height:400px;border:1px solid #CECECE;"></div>
					</div>
					<!--<div class="col-md-6 wow fadeInRight" data-wow-delay="0.6s">
						<div id="MyGmaps" style="width:600px;height:400px;border:1px solid #CECECE;"></div>
					</div>-->
				</div>
			</div>
		</section>
		<!-- end download -->


		<!-- start contact -->
		<section id="contact">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<h2 class="text-uppercase">Contactos y sugerencias</h2>
							<p>Encuentranos aquí </p>
							<address>
								<p><i class="fa fa-map-marker"></i>Municipalidad de temuco</p>
								<p><i class="fa fa-whatsapp" style="background: green;"></i> fono 45-973000</p>
								<p><i class="fa fa-envelope-o" style="background: red;"></i> munitco@temuco.cl</p>
							</address>
						</div>
						<div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
							<div class="contact-form">
								<form action="#" method="post">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="Nombre">
									</div>
									<div class="col-md-6">
										<input type="email" class="form-control" placeholder="E-mail">
									</div>

									<div class="col-md-12">
										<textarea class="form-control" placeholder="Medicamentos" rows="4"></textarea>
									</div>
									<div class="col-md-8 col-md-offset-4">
										<input type="submit" class="form-control text-uppercase" value="Enviar">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<p>Farmacias populares

                    | Municipalidad de Temuco </a></p>
				</div>
			</div>
		</footer>
		<!-- end footer -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>

	</body>
</html>
