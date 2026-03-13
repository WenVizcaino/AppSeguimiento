<!DOCTYPE html>
<html>
<head>
    <title>Crear ficha</title>
</head>
<body>

<h1>Crear ficha</h1>

<form action="{{ route('fichadecaracterizacion.store') }}" method="POST">

    @csrf

    Codigo
    <input type="text" name="Codigo"><br><br>

    Denominacion
    <input type="text" name="Denominacion"><br><br>

    Direccion
    <input type="text" name="Direccion"><br><br>

    Observaciones
    <input type="text" name="Observaciones"><br><br>

    <button type="submit">Guardar</button>

</form>

<br>

<a href="{{ route('fichadecaracterizacion.index') }}">Volver</a>

</body>
</html>
