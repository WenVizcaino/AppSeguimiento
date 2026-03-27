<!DOCTYPE html>
<html>
<head>
    <title>Lista de Bitácoras</title>
</head>
<body>

<h2>Bitácoras Subidas</h2>

<a href="{{ route('bitacora.create') }}">Subir Nueva Bitácora</a>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table border="1">


    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Archivo</th>
    </tr>

    @foreach($bitacoras as $bitacora)

        <tr>

            <td>{{ $bitacora->id }}</td>

            <td>{{ $bitacora->titulo }}</td>

            <td>

                <a href="{{ asset('bitacoras/'.$bitacora->archivo) }}" target="_blank">

                    Ver PDF

                </a>

            </td>

        </tr>

    @endforeach

</table>

</body>
</html>
