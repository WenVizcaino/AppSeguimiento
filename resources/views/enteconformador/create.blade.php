<!DOCTYPE html>
<html>
<head>
    <title>Crear</title>
</head>
<body>

<h1>Crear Ente Conformador</h1>

<form action="{{ route('enteconformador.store') }}" method="POST">
    @csrf

    Documento: <input type="text" name="Numdoc"><br><br>
    Nombres: <input type="text" name="Nombres"><br><br>
    Apellidos: <input type="text" name="Apellidos"><br><br>
    Dirección: <input type="text" name="Direccion"><br><br>
    Teléfono: <input type="text" name="Telefono"><br><br>
    Correo Institucional: <input type="email" name="CorreoInstitucional"><br><br>
    Correo Personal: <input type="email" name="CorreoPersonal"><br><br>

    Sexo:
    <select name="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select><br><br>

    Fecha Nacimiento: <input type="date" name="fechaNacimiento"><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="{{ route('enteconformador.index') }}">Volver</a>

</body>
</html>
