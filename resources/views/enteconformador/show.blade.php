<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Ente Conformador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <span>Información del Ente Conformador</span>
            <div>
                <a href="{{ route('enteconformador.edit', $enteconformador) }}"
                   class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('enteconformador.destroy', $enteconformador) }}"
                      method="POST" class="d-inline"
                      onsubmit="return confirm('¿Eliminar este registro?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Tipo Documento:</strong> {{ $enteconformador->tdoc }}</p>
                    <p><strong>Número Documento:</strong> {{ $enteconformador->Numdoc }}</p>
                    <p><strong>Razón Social:</strong> {{ $enteconformador->RazonSocial }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Dirección:</strong> {{ $enteconformador->Direccion }}</p>
                    <p><strong>Teléfono:</strong> {{ $enteconformador->Telefono }}</p>
                    <p><strong>Correo Institucional:</strong> {{ $enteconformador->CorreoInstitucional }}</p>
                </div>
            </div>
            <a href="{{ route('enteconformador.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
