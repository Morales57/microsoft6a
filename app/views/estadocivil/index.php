<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Estados Civiles</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="/apple6b/public/css/style.css">
=======
    <link rel="stylesheet" href="/apple5a/public/css/style.css">
>>>>>>> c7acd2b8a2b93940a3c5f07e647407719b32c0cf
</head>
<body>

<div class="container">
    <h1>Listar Estados Civiles</h1>
<<<<<<< HEAD
    <a href="/apple6b/app/views/estadocivil/create.php"><button>Agregar</button></a>
=======
    <a href="/apple5a/app/views/estadocivil/create.php"><button>Agregar</button></a>
>>>>>>> c7acd2b8a2b93940a3c5f07e647407719b32c0cf

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($estadosciviles) && is_array($estadosciviles)): ?>
                <?php foreach ($estadosciviles as $estadocivil): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($estadocivil['idestadocivil']); ?></td>
                        <td><?php echo htmlspecialchars($estadocivil['nombre']); ?></td>
                        <td>
<<<<<<< HEAD
                            <a href="/apple6b/public/estadocivil/edit?idestadocivil=<?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>">
                                <button>Editar</button>
                            </a>
                            <a href="/apple6b/public/estadocivil/eliminar?idestadocivil=<?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>"
=======
                            <a href="/apple5a/public/estadocivil/edit?idestadocivil=<?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>">
                                <button>Editar</button>
                            </a>
                            <a href="/apple5a/app/views/estadocivil/eliminar?idestadocivil=<?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>"
>>>>>>> c7acd2b8a2b93940a3c5f07e647407719b32c0cf
                               onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                <button>Eliminar</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No hay registros disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<<<<<<< HEAD
<script src="/apple6b/public/js/script.js"></script>
</body>
</html>
=======
<script src="/apple5a/public/js/script.js"></script>
</body>
</html>
>>>>>>> c7acd2b8a2b93940a3c5f07e647407719b32c0cf
