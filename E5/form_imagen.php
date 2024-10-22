<!--


-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>
<body>
    <form action="subir_imagen.php" method="POST" enctype="multipart/form-data">
        <label for="title">Título de la imagen:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="image">Seleccione una imagen:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" value="Subir Imagen">
    </form>
</body>
</html>