<!DOCTYPE html>
<html>
<head>
	<title>Saludo idiomas</title>
</head>
<body>
  @foreach ($idiomas as $idioma)
  	<p>{{$idioma->saludo}} {{$nombre}}!</p>
  @endforeach
</body>
</html>