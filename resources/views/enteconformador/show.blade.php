<!DOCTYPE html>
<html>
<head>
    <title>Detalle</title>
</head>
<body>

<h1>Detalle del Ente</h1>

<p><strong>NIS:</strong> {{ $enteconformador->NIS }}</p>
<p><strong>Documento:</strong> {{ $enteconformador->Numdoc }}</p>
<p><strong>Nombres:</strong> {{ $enteconformador->Nombres }}</p>
<p><strong>Apellidos:</strong> {{ $enteconformador->Apellidos }}</p>
<p><strong>Dirección:</strong> {{ $enteconformador->Direccion }}</p>
<p><strong>Teléfono:</strong> {{ $enteconformador->Telefono }}</p>
<p><strong>Correo Institucional:</strong> {{ $enteconformador->CorreoInstitucional }}</p>
<p><strong>Correo Personal:</strong> {{ $enteconformador->CorreoPersonal }}</p>
<p><strong>Sexo:</strong> {{ $enteconformador->sexo }}</p>
<p><strong>Fecha Nacimiento:</strong> {{ $enteconformador->fechaNacimiento }}</p>

<br>
<a href="{{ route('enteconformador.index') }}">Volver</a>

</body>
</html>
