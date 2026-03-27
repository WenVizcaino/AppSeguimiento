<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Centro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            Crear Centro de Formación
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

            {{-- ✅ action, method y @csrf --}}
            <form action="{{ route('centrodeformacion.store') }}" method="POST">
                @csrf


                <div class="mb-3">
                    <label class="form-label">Código</label>
                    <input type="text" name="Codigo"
                           class="form-control @error('Codigo') is-invalid @enderror"
                           value="{{ old('Codigo') }}">
                    @error('Codigo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Denominación</label>
                    <input type="text" name="Denominacion"
                           class="form-control @error('Denominacion') is-invalid @enderror"
                           value="{{ old('Denominacion') }}">
                    @error('Denominacion') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="Direccion"
                           class="form-control @error('Direccion') is-invalid @enderror"
                           value="{{ old('Direccion') }}">
                    @error('Direccion') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Observaciones</label>
                    {{-- ✅ textarea usa old() entre las etiquetas, no value= --}}
                    <textarea name="Observaciones"
                              class="form-control @error('Observaciones') is-invalid @enderror"
                              rows="3">{{ old('Observaciones') }}</textarea>
                    @error('Observaciones') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button class="btn btn-success">Guardar</button>
                {{-- ✅ ruta Laravel en lugar de index.html --}}
                <a href="{{ route('centrodeformacion.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
