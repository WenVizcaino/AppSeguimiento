<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Ente Conformador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            Editar Ente Conformador
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

            <form action="{{ route('enteconformador.update', $enteconformador) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tipo Documento</label>
                        <select name="tdoc" class="form-select @error('tdoc') is-invalid @enderror">
                            <option value="">Seleccionar...</option>
                            <option value="1" {{ old('tdoc', $enteconformador->tdoc) == 1 ? 'selected' : '' }}>NIT</option>
                            <option value="2" {{ old('tdoc', $enteconformador->tdoc) == 2 ? 'selected' : '' }}>Cédula</option>
                            <option value="3" {{ old('tdoc', $enteconformador->tdoc) == 3 ? 'selected' : '' }}>Cédula Extranjería</option>
                        </select>
                        @error('tdoc') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Número Documento</label>
                        <input type="text" name="Numdoc"
                               class="form-control @error('Numdoc') is-invalid @enderror"
                               value="{{ old('Numdoc', $enteconformador->Numdoc) }}">
                        @error('Numdoc') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Razón Social</label>
                        <input type="text" name="RazonSocial"
                               class="form-control @error('RazonSocial') is-invalid @enderror"
                               value="{{ old('RazonSocial', $enteconformador->RazonSocial) }}">
                        @error('RazonSocial') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="Direccion"
                               class="form-control @error('Direccion') is-invalid @enderror"
                               value="{{ old('Direccion', $enteconformador->Direccion) }}">
                        @error('Direccion') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="Telefono"
                               class="form-control @error('Telefono') is-invalid @enderror"
                               value="{{ old('Telefono', $enteconformador->Telefono) }}">
                        @error('Telefono') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Correo Institucional</label>
                        <input type="email" name="CorreoInstitucional"
                               class="form-control @error('CorreoInstitucional') is-invalid @enderror"
                               value="{{ old('CorreoInstitucional', $enteconformador->CorreoInstitucional) }}">
                        @error('CorreoInstitucional') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <button class="btn btn-warning">Actualizar</button>
                <a href="{{ route('enteconformador.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
