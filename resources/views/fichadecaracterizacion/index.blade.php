<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Fichas de Caracterización</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <h2>Fichas de Caracterización</h2>
        <a href="{{ route('fichadecaracterizacion.create') }}" class="btn btn-success">+ Nueva Ficha</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                <tr>
                    <th>NIS</th>
                    <th>Código</th>
                    <th>Denominación</th>
                    <th>Cupo</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($fichas as $ficha)
                    <tr>
                        <td>{{ $ficha->NIS }}</td>
                        <td>{{ $ficha->Codigo }}</td>
                        <td>{{ $ficha->Denominacion }}</td>
                        <td>{{ $ficha->Cupo }}</td>
                        <td>{{ $ficha->fechaInicio?->format('Y-m-d') }}</td>
                        <td>{{ $ficha->fechaFin?->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('fichadecaracterizacion.show', $ficha) }}"
                               class="btn btn-info btn-sm">Ver</a>

                            <a href="{{ route('fichadecaracterizacion.edit', $ficha) }}"
                               class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('fichadecaracterizacion.destroy', $ficha) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Eliminar esta ficha?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">No hay fichas registradas.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $fichas->links() }}
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
