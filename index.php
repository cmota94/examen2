<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
	<title>Presentación de autor</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body><br>
		<h4 align="center" class="display-3">La partícula divina <img src="http://www.librosmaravillosos.com/laparticuladivina/imagenes/portada.jpg" alt="" width="100px" class="rounded mx-auto d-block"> </h4>
		<p align="justify">Los físicos la llaman ?la partícula de Dios? porque es la pieza que les falta para comprender la estructura de la materia a nivel subatómico. Pero confían en pescarla cuando dentro de poco tiempo se ponga en marcha la máquina más poderosa jamás construida: el LHC.
Ahora, en 2012, parece que por fin podemos afirmar que el bosón de Higgs existe.</p>

	<button id="btnParrafos" class="btn btn-outline-primary">Ver texto demo</button><br>
	
	<br><div id="parrafos" align="justify"></div>
	
	<button id="btnPrecios" class="btn btn-outline-primary">Ver precios</button><br>
	
	<br><table id="lista" class="table table-hover center" ></table><br>
	
	<footer><p align="center"><a href="creditos.php">Créditos</a></p></footer>

</body>

<script>
$(document).ready(function(){
	
  $("#btnParrafos").click(function(){
    $("#parrafos").load("parrafos.html");
  });
  
  $("#btnPrecios").click(function(){
    $("#lista").load("precios.html");
  });

});
	 
</script>

</html>