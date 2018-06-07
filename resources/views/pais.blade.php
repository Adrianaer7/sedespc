<!DOCTYPE html>
<html>
 <head>
	<title>Validar</title>
 </head>
  <body>

	<form action="{{URL('/validar')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		Pais:<input type="text" name="name">
		Localidad:<input type="text" name="localidad" id="local">
		Codigo postal: <input type="text" name="codpos" id="cp">
		<button type="submit" value="aceptar" name="boton">

	</form>
  </body>
</html>

