<!DOCTYPE html>
<html>
<head>
    <title>Detalle ficha</title>
</head>
<body>

<h1>Detalle</h1>

<p>NIS: {{ $fichadecaracterizacion->NIS }}</p>
<p>Codigo: {{ $fichadecaracterizacion->Codigo }}</p>
<p>Denominacion: {{ $fichadecaracterizacion->Denominacion }}</p>
<p>Direccion: {{ $fichadecaracterizacion->Direccion }}</p>
<p>Observaciones: {{ $fichadecaracterizacion->Observaciones }}</p>
<a href="{{ route('fichadecaracterizacion.index') }}">Volver</a>
</body>
</html>
