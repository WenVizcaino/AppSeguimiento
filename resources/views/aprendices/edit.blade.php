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

            <form>
                <div class="mb-3">
                    <label>Nombres</label>
                    <input type="text" class="form-control" value="Juan">
                </div>

                <div class="mb-3">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" value="Pérez">
                </div>

                <div class="mb-3">
                    <label>Correo</label>
                    <input type="email" class="form-control" value="juan@sena.edu.co">
                </div>

                <button class="btn btn-warning">Actualizar</button>
                <a href="index.html" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
