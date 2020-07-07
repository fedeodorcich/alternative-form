<!DOCTYPE html>
<html>
<head>
	<title>Covid Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	

<div class="card col-md-10 container">
  <div class="card-header">
    <h5 class="card-title">Visita</h5>
  </div>
  <div class="card-body">
    <h6 class="text-center">Seleccione su visita</h6>
    <form>
    		<!------SELECCION DE TIPOS DE VISITA---------------->
			<div class="text-center">
				<button class="btn btn-info">Particular</button>
				<button class="btn btn-info">Institucional</button>
			</div>
			<br>
			<div class="text-center">
				<span class="margral">Cantidad de personas</span><input type="number" name="cant" id="cant" class="rounded">
			</div>
			<!-------------------------------------------------->
			 <button class="btn btn-primary">Continuar</button>
    </form>

   
    <ol class="carousel-indicators">
    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  	</ol>
  </div>
</div>


	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

