<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Aprendices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Lista de Aprendices</h2>
        <a href="create.html" class="btn btn-success">+ Nuevo Aprendiz</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                <tr>
                    <th>NIS</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>101</td>
                    <td>Juan</td>
                    <td>Pérez</td>
                    <td>juan@sena.edu.co</td>
                    <td>
                        <a href="show.html" class="btn btn-info btn-sm">Ver</a>
                        <a href="edit.html" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Ana</td>
                    <td>Gómez</td>
                    <td>ana@sena.edu.co</td>
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
