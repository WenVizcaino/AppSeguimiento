<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Aprendices</title>
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
        <h2>Lista de Aprendices</h2>
        <a href="{{ route('aprendices.create') }}" class="btn btn-success">+ Nuevo Aprendiz</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                <tr>
                    <th>NIS</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo Institucional</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($listado as $aprendice)
                    <tr>
                        <td>{{ $aprendice->NIS }}</td>
                        <td>{{ $aprendice->Nombres }}</td>
                        <td>{{ $aprendice->Apellidos }}</td>
                        <td>{{ $aprendice->CorreoInstitucional }}</td>
                        <td>
                            <a href="{{ route('aprendices.show', $aprendice) }}"
                               class="btn btn-info btn-sm">Ver</a>

                            <a href="{{ route('aprendices.edit', $aprendice) }}"
                               class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('aprendices.destroy', $aprendice) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Eliminar este aprendiz?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No hay aprendices registrados.</td>
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
