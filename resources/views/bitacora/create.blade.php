<!DOCTYPE html>
<html>
<head>
    <title>Subir Bitácora</title>
</head>
<body>

<h2>Subir Bitácora PDF</h2>

<form action="{{ route('bitacora.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>Título</label>
    <input type="text" name="titulo" required>
    <br><br>

    <label>Archivo PDF</label>
    <input type="file" name="archivo" accept=".pdf" required>
    <br><br>

    <button type="submit">Subir PDF</button>

</form>

<br>

<a href="{{ route('bitacora.index') }}">Ver Bitácoras</a>

</body>
</html>
