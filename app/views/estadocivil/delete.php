<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elininar estadocivil</title>
</head>
<body>

<h1>Editar el estadocivil</h1>
<<<<<<< HEAD
<form action="/apple6b/public/estadocivil/delete" method="POST">
=======
<form action="/apple5a/public/estadocivil/delete" method="POST">
>>>>>>> c7acd2b8a2b93940a3c5f07e647407719b32c0cf
    <input type="hidden" name="idestadocivil" value="<?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($estadocivil['nombre']); ?>" required>
    
    <input type="submit" value="Eliminar">
</form>

<a href="index">Volver al listado</a>

</body>
</html>
