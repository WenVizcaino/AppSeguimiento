<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Centros de Formación</title>
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
        <h2>Centros de Formación</h2>
        <a href="{{ route('centrodeformacion.create') }}" class="btn btn-success">+ Nuevo Centro</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                <tr>
                    <th>NIS</th>
                    <th>Código</th>
                    <th>Denominación</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($listado as $centrodeformacion)
                    <tr>
                        <td>{{ $centrodeformacion->NIS }}</td>
                        <td>{{ $centrodeformacion->Codigo }}</td>
                        <td>{{ $centrodeformacion->Denominacion }}</td>
                        <td>{{ $centrodeformacion->Direccion }}</td>
                        <td>
                            <a href="{{ route('centrodeformacion.show', $centrodeformacion->NIS) }}"
                               class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('centrodeformacion.edit', $centrodeformacion->NIS) }}"
                               class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('centrodeformacion.destroy', $centrodeformacion->NIS) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Eliminar este centro?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No hay centros registrados.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $listado->links() }}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
