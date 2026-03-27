<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Aprendiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
            <span>Información del Aprendiz</span>
            <div>
                <a href="{{ route('aprendices.edit', $aprendices) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('aprendices.destroy', $aprendices) }}"
                      method="POST" class="d-inline"
                      onsubmit="return confirm('¿Eliminar este aprendiz?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>NIS:</strong> {{ $aprendices->NIS }}</p>
                    <p><strong>Número Documento:</strong> {{ $aprendices->Numdoc }}</p>
                    <p><strong>Nombres:</strong> {{ $aprendices->Nombres }}</p>
                    <p><strong>Apellidos:</strong> {{ $aprendices->Apellidos }}</p>
                    <p><strong>Dirección:</strong> {{ $aprendices->Direccion }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Teléfono:</strong> {{ $aprendices->Telefono }}</p>
                    <p><strong>Correo Institucional:</strong> {{ $aprendices->CorreoInstitucional }}</p>
                    <p><strong>Correo Personal:</strong> {{ $aprendices->CorreoPersonal }}</p>
                    <p><strong>Sexo:</strong>
                        {{ [1 => 'Masculino', 2 => 'Femenino', 3 => 'Otro'][$aprendices->sexo] ?? 'No especificado' }}
                    </p>
                    <p><strong>Fecha Nacimiento:</strong>
                        {{ $aprendices->fechaNacimiento?->format('Y-m-d') ?? 'No registrada' }}
                    </p>
                </div>
            </div>
            <a href="{{ route('aprendices.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
