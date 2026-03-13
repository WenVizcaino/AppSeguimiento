<!DOCTYPE html>
<html>
<head>
    <title>Editar ficha</title>
</head>
<body>

<h1>Editar ficha</h1>

<form action="{{ route('fichadecaracterizacion.update',$fichadecaracterizacion) }}" method="POST">

    @csrf
    @method('PUT')

    Codigo
    <input type="text" name="Codigo" value="{{ $fichadecaracterizacion->Codigo }}"><br><br>

    Denominacion
    <input type="text" name="Denominacion" value="{{ $fichadecaracterizacion->Denominacion }}"><br><br>

    Direccion
    <input type="text" name="Direccion" value="{{ $fichadecaracterizacion->Direccion }}"><br><br>

    Observaciones
    <input type="text" name="Observaciones" value="{{ $fichadecaracterizacion->Observaciones }}"><br><br>

    <button type="submit">Actualizar</button>

</form>

<br>

<a href="{{ route('fichadecaracterizacion.index') }}">Volver</a>

</body>
</html>
