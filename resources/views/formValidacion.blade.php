<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form action="{{route('storeVal1')}}" method="post">
 	@csrf
 	Nombre:<input type="text" name="nombre" value="{{old('nombre')}}">
 		@if ($errors->has('nombre'))
 		<strong style="color: red">{{$errors->first('nombre')}}</strong>
 		@endif
 	<br><br>
 	Apellido:<input type="text" name="apellido" value="{{old('apellido')}}">
 		@if ($errors->has('apellido'))
 		<strong style="color: red">{{$errors->first('apellido')}}</strong>
 		@endif
 	<br><br>
 	Email:<input type="text" name="email" value="{{old('email')}}">
 		@if ($errors->has('email'))
 		<strong style="color: red">{{$errors->first('email')}}</strong>
 		@endif
 	<br><br>
 	Telefono:<input type="text" name="telefono" value="{{old('telefono')}}">
 		@if ($errors->has('telefono'))
 		<strong style="color: red">{{$errors->first('telefono')}}</strong>
 		@endif
 	<br><br>

 	<input type="submit" value="Enviar">
 	<a href="/">Volver principal</a>
 	

 </form>

 		
</body>
</html>