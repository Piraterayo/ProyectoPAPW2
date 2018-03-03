<!DOCTYPE html>
<html>

	<head>
		<title>PROYECTO PAPW2</title>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">  
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">  
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>

	<body>

		<nav class="navbar navbar-inverse">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	         <img class="logo" src="logo2.jpg">
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Inicio</a></li>
	            <li><a href="#about">Acerca de</a></li>
	            <li><a href="#contact">Contacto</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departamentos <span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Electronica</a></li>
	                <li><a href="#">Juegos</a></li>
	                <li><a href="#">Peliculas</a></li>
	                <li role="separator" class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Ropa</a></li>
	                <li><a href="#">Calzado</a></li>
	              </ul>
	            </li>
	            <li><a href="#contact">Iniciar Sesion</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>

	    <div class="container">

	    	<div class="landing">

		        <article class="col-xs-12 col-sm-6 col-md-7 login">
		        	<form>
			        		<label>LOGIN</label>

			        		<div class="form-group">
				        		<label>Correo:</label>
				        		<input class="form-control" type="email" placeholder="Correo:">
			        		</div>

			        		<div class="form-group">
				        		<label>Contrasena:</label>
				        		<input class="form-control" type="password" placeholder="Contrasena:">
			        		</div>

			        		<button type="button" class="btn btn-success">Entrar</button>

			        	</form>
		        </article>

		        <aside class="col-xs-12 col-sm-6 col-md-5 registro"> 
			        	<form>
			        		<label>¿Eres nuevo? Registrate aqui.</label>

			        		<div class="form-group">
				        		<label>Nombre:</label>
				        		<input class="form-control" type="text" placeholder="Nombre:">
			        		</div>

			        		<div class="form-group">
				        		<label>Correo:</label>
				        		<input class="form-control" type="email" placeholder="Correo:">
			        		</div>

			        		<div class="form-group">
				        		<label>Contrasena:</label>
				        		<input class="form-control" type="password" placeholder="Contrasena:">
			        		</div>

			        		<button type="button" class="btn btn-primary">Crear cuenta</button>

			        	</form>
		        </aside>

		        <div class="carrusel col-xs-12">
					      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					        <ol class="carousel-indicators">
					          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					        </ol>
					        <div class="carousel-inner" role="listbox">
					          <div class="item active">
					            <img src="logo2.jpg" alt="First slide">
					          </div>
					          <div class="item">
					             <img src="logo2.jpg" alt="First slide">
					          </div>
					          <div class="item">
					            <img src="logo2.jpg" alt="First slide">
					          </div>
					        </div>
					        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					          <span class="sr-only">Previous</span>
					        </a>
					        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					          <span class="sr-only">Next</span>
					        </a>
				</div>

	    	</div>
	    </div>
	   
	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>

	</body>

</html>