<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Entes Conformadores</title>
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
        <h2>Lista de Entes Conformadores</h2>
        <a href="{{ route('enteconformador.create') }}" class="btn btn-success">+ Nuevo Registro</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                <tr>
                    <th>Tipo Doc</th>
                    <th>Número Documento</th>
                    <th>Razón Social</th>
                    <th>Teléfono</th>
                    <th>Correo Institucional</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($enteconformadores as $item)
                    <tr>
                        <td>{{ $item->tdoc }}</td>
                        <td>{{ $item->Numdoc }}</td>
                        <td>{{ $item->RazonSocial }}</td>
                        <td>{{ $item->Telefono }}</td>
                        <td>{{ $item->CorreoInstitucional }}</td>
                        <td>
                            <a href="{{ route('enteconformador.show', $item) }}"
                               class="btn btn-info btn-sm">Ver</a>

                            <a href="{{ route('enteconformador.edit', $item) }}"
                               class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('enteconformador.destroy', $item) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Eliminar este registro?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No hay registros.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $enteconformadores->links() }}
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
