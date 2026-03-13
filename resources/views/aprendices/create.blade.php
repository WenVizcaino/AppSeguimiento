<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Aprendiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            Crear Nuevo Aprendiz
        </div>
        <div class="card-body">

            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Número Documento</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Nombres</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Apellidos</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Dirección</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Teléfono</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Correo Institucional</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Correo Personal</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Sexo</label>
                        <select class="form-select">
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

                <button class="btn btn-success">Guardar</button>
                <a href="index.html" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
