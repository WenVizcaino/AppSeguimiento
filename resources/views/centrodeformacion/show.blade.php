<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Centro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <span>Información del Centro</span>
            <div>
                <a href="{{ route('centrodeformacion.edit', $centrodeformacion->NIS) }}"
                   class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('centrodeformacion.destroy', $centrodeformacion->NIS) }}"
                      method="POST" class="d-inline"
                      onsubmit="return confirm('¿Eliminar este centro?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <p><strong>NIS:</strong> {{ $centrodeformacion->NIS }}</p>
            <p><strong>Código:</strong> {{ $centrodeformacion->Codigo }}</p>
            <p><strong>Denominación:</strong> {{ $centrodeformacion->Denominacion }}</p>
            <p><strong>Dirección:</strong> {{ $centrodeformacion->Direccion }}</p>
            <p><strong>Observaciones:</strong> {{ $centrodeformacion->Observaciones ?? 'Sin observaciones' }}</p>
            <a href="{{ route('centrodeformacion.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
