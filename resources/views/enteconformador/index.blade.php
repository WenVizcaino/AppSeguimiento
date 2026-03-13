<!DOCTYPE html>
<html>
<head>
    <title>Listado</title>
</head>
<body>

<h1>Lista de Ente Conformadores</h1>

<a href="{{ route('enteconformador.create') }}">Nuevo Registro</a>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="5">
    <tr>
        <th>NIS</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Acciones</th>
    </tr>

    @foreach($enteconformadores as $item)
        <tr>
            <td>{{ $item->NIS }}</td>
            <td>{{ $item->Nombres }}</td>
            <td>{{ $item->Apellidos }}</td>
            <td>
                <a href="{{ route('enteconformador.show', $item) }}">Ver</a>
                <a href="{{ route('enteconformador.edit', $item) }}">Editar</a>

                <form action="{{ route('enteconformador.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>
