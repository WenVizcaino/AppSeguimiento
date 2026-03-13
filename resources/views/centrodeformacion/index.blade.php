<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Centros de Formación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Centros de Formación</h2>
        <a href="create.html" class="btn btn-success">+ Nuevo Centro</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                <tr>
                    <th>NIS</th>
                    <th>Numdoc</th>
                    <th>Código</th>
                    <th>Denominación</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>900123456</td>
                    <td>CDF-01</td>
                    <td>Centro Industrial</td>
                    <td>Calle 10 # 5-20</td>
                    <td>
                        <a href="show.html" class="btn btn-info btn-sm">Ver</a>
                        <a href="edit.html" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
