<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Ficha de Caracterización</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            Editar Ficha de Caracterización
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('fichadecaracterizacion.update', $fichadecaracterizacion) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Código</label>
                        <input type="text" name="Codigo"
                               class="form-control @error('Codigo') is-invalid @enderror"
                               value="{{ old('Codigo', $fichadecaracterizacion->Codigo) }}">
                        @error('Codigo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Denominación</label>
                        <input type="text" name="Denominacion"
                               class="form-control @error('Denominacion') is-invalid @enderror"
                               value="{{ old('Denominacion', $fichadecaracterizacion->Denominacion) }}">
                        @error('Denominacion') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Cupo</label>
                        <input type="number" name="Cupo"
                               class="form-control @error('Cupo') is-invalid @enderror"
                               value="{{ old('Cupo', $fichadecaracterizacion->Cupo) }}">
                        @error('Cupo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Fecha Inicio</label>
                        <input type="date" name="fechaInicio"
                               class="form-control @error('fechaInicio') is-invalid @enderror"
                               value="{{ old('fechaInicio', $fichadecaracterizacion->fechaInicio?->format('Y-m-d')) }}">
                        @error('fechaInicio') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Fecha Fin</label>
                        <input type="date" name="fechaFin"
                               class="form-control @error('fechaFin') is-invalid @enderror"
                               value="{{ old('fechaFin', $fichadecaracterizacion->fechaFin?->format('Y-m-d')) }}">
                        @error('fechaFin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Observaciones</label>
                        <textarea name="Observaciones" rows="3"
                                  class="form-control @error('Observaciones') is-invalid @enderror">{{ old('Observaciones', $fichadecaracterizacion->Observaciones) }}</textarea>
                        @error('Observaciones') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <button class="btn btn-warning">Actualizar</button>
                <a href="{{ route('fichadecaracterizacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
