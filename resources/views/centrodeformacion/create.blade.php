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

            <form>
                <div class="mb-3">
                    <label>Numdoc</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Código</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Denominación</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Dirección</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Observaciones</label>
                    <textarea class="form-control"></textarea>
                </div>

                <button class="btn btn-success">Guardar</button>
                <a href="index.html" class="btn btn-secondary">Cancelar</a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
