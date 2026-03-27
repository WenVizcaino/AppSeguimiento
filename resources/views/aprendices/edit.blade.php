<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Aprendiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            Editar Aprendiz
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

            <form action="{{ route('aprendices.update', $aprendices) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Número Documento</label>
                        <input type="text" name="Numdoc"
                               class="form-control @error('Numdoc') is-invalid @enderror"
                               value="{{ old('Numdoc', $aprendices->Numdoc) }}">
                        @error('Numdoc') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nombres</label>
                        <input type="text" name="Nombres"
                               class="form-control @error('Nombres') is-invalid @enderror"
                               value="{{ old('Nombres', $aprendices->Nombres) }}">
                        @error('Nombres') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="Apellidos"
                               class="form-control @error('Apellidos') is-invalid @enderror"
                               value="{{ old('Apellidos', $aprendices->Apellidos) }}">
                        @error('Apellidos') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="Direccion"
                               class="form-control @error('Direccion') is-invalid @enderror"
                               value="{{ old('Direccion', $aprendices->Direccion) }}">
                        @error('Direccion') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="Telefono"
                               class="form-control @error('Telefono') is-invalid @enderror"
                               value="{{ old('Telefono', $aprendices->Telefono) }}">
                        @error('Telefono') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Correo Institucional</label>
                        <input type="email" name="CorreoInstitucional"
                               class="form-control @error('CorreoInstitucional') is-invalid @enderror"
                               value="{{ old('CorreoInstitucional', $aprendices->CorreoInstitucional) }}">
                        @error('CorreoInstitucional') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Correo Personal</label>
                        <input type="email" name="CorreoPersonal"
                               class="form-control @error('CorreoPersonal') is-invalid @enderror"
                               value="{{ old('CorreoPersonal', $aprendices->CorreoPersonal) }}">
                        @error('CorreoPersonal') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Sexo</label>
                        <select name="sexo" class="form-select @error('sexo') is-invalid @enderror">
                            <option value="">Seleccionar...</option>
                            <option value="1" {{ old('sexo', $aprendices->sexo) == 1 ? 'selected' : '' }}>Masculino</option>
                            <option value="2" {{ old('sexo', $aprendices->sexo) == 2 ? 'selected' : '' }}>Femenino</option>
                            <option value="3" {{ old('sexo', $aprendices->sexo) == 3 ? 'selected' : '' }}>Otro</option>
                        </select>
                        @error('sexo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">Fecha Nacimiento</label>
                        <input type="date" name="fechaNacimiento"
                               class="form-control @error('fechaNacimiento') is-invalid @enderror"
                               value="{{ old('fechaNacimiento', $aprendices->fechaNacimiento?->format('Y-m-d')) }}">
                        @error('fechaNacimiento') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <button class="btn btn-warning">Actualizar</button>
                <a href="{{ route('aprendices.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
