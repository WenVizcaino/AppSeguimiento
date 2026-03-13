<!DOCTYPE html>
<html>
<head>
    <title>Lista de Fichas</title>
</head>
<body>

<h1>Fichas de Caracterización</h1>

<a href="{{ route('fichadecaracterizacion.create') }}">Crear nueva ficha</a>

<table border="1">
    <tr>
        <th>NIS</th>
        <th>Codigo</th>
        <th>Denominacion</th>
        <th>Acciones</th>
    </tr>

    @foreach($fichas as $ficha)

        <tr>

            <td>{{ $ficha->NIS }}</td>
            <td>{{ $ficha->Codigo }}</td>
            <td>{{ $ficha->Denominacion }}</td>

            <td>

                <a href="{{ route('fichadecaracterizacion.show',$ficha) }}">Ver</a>

                <a href="{{ route('fichadecaracterizacion.edit',$ficha) }}">Editar</a>

                <form action="{{ route('fichadecaracterizacion.destroy',$ficha) }}" method="POST">

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

