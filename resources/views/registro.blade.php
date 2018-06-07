<!DOCTYPE html>
<html>
 <head>
	<title>Validar</title>
 </head>
  <body>

	<form action="{{URL('/validar')}}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		DNI:<input type="text" name="dni">
		NOMBRE:<input type="text" name="nombre" id="nomb">
		APELLIDO: <input type="text" name="apellido" id="ape">
		ESTABLECIMIENTO: <input type="text" name="establecimiento" id="estable">
		CATEGORIA: <input type="text" name="categoria" id="cate">
		<button type="submit" value="aceptar" name="boton">

	</form>
  </body>
</html>
