<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form action="{{route('storeVal1')}}">
 	Nombre<input type="text" name="nombre" value="{{old('nombre')}}">
 	Apellido<input type="text" name="apellido" value="{{old('apellido')}}">
 	Email<input type="text" name="email" value="{{old('email')}}">
 	Telefono<input type="text" name="telefono" value="{{old('telefono')}}">

 	<input type="submit" value="Enviar">
 	<a href="/">Volver principal</a>
 	

 </form>
</body>
</html>