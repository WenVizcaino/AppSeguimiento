<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
</head>
<body>

<h1>Editar Ente</h1>

<form action="{{ route('enteconformador.update', $enteconformador) }}" method="POST">
    @csrf
    @method('PUT')

    Documento: <input type="text" name="Numdoc" value="{{ $enteconformador->Numdoc }}"><br><br>
    Nombres: <input type="text" name="Nombres" value="{{ $enteconformador->Nombres }}"><br><br>
    Apellidos: <input type="text" name="Apellidos" value="{{ $enteconformador->Apellidos }}"><br><br>
    Dirección: <input type="text" name="Direccion" value="{{ $enteconformador->Direccion }}"><br><br>
    Teléfono: <input type="text" name="Telefono" value="{{ $enteconformador->Telefono }}"><br><br>
    Correo Institucional: <input type="email" name="CorreoInstitucional" value="{{ $enteconformador->CorreoInstitucional }}"><br><br>
    Correo Personal: <input type="email" name="CorreoPersonal" value="{{ $enteconformador->CorreoPersonal }}"><br><br>

    Sexo:
    <select name="sexo">
        <option value="Masculino" {{ $enteconformador->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
        <option value="Femenino" {{ $enteconformador->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
    </select><br><br>

    Fecha Nacimiento:
    <input type="date" name="fechaNacimiento" value="{{ $enteconformador->fechaNacimiento }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="{{ route('enteconformador.index') }}">Volver</a>

</body>
</html>
