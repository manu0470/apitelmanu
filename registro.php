<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRO</title>
	<link rel="stylesheet" href="flatly.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=<?=$apiManu?>" ></script>
	<link rel="icon" style="image/x-icon" href="img/logo.png">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a85adf3762.js" crossorigin="anonymous"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyC_UwaejdWAO71-91WxZN6xkuxWkDo8GyM"></script>
	
</head>
<body>	
<form class="form" action="funcionDos.php" method="get">
<div align="center"><img src="img/logo.png" width="50%" height="50%"></div>
<br>
	<h1 align="center">REGISTRO DE DATOS</h1>
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Matrícula</label>
  <input type="text" class="form-control" value="3521110001" required>
</div>
	<div class="mb-3">
	<select class="form-select" aria-label="Default select example">
  <option selected>Carrera</option>
  <option value="1">Desarrollo de Software Multiplataforma</option>
  <option value="2">Redes Inteligentes y Ciberseguridad</option>
  <option value="3">Entornos Virtuales y Negocios Digitales</option>
</select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text" class="form-control" value="Carlos Manuel" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Apellido Paterno</label>
  <input type="text" class="form-control" value="Zavala" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Apellido Materno</label>
  <input type="text" class="form-control" value="Salas" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
  <input type="text" class="form-control" id="tele" name="tele" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Sexo</label>
  <input type="text" class="form-control" value="Masculino" required>
</div>
  <div class="mb-3" align="center">
  	 <button type="submit" class="btn btn-primary" style="background: #04b49a; border-color: #04b49a;">REGISTRAR</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
