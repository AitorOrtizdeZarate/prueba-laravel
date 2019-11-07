<!DOCTYPE html>
<html>
<head>
	<title>Idiomas</title>
</head>
<body>
 <form action="{{route('storeForm2')}}" method="post">
 	@csrf
 	Nombre<input type="text" name="nombre">
 	Apellido<input type="text" name="apellido">

 	<input type="submit" value="Enviar">
 	<a href="/">Volver principal</a>
 	

 </form>
</body>
</html>