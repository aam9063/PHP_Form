<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen Subida</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $image = $_FILES['image'];

        // Definir el directorio de subida
        $uploadDir = 'images/';
        

        // Obtener el nombre del archivo sin la ruta completa
        $filename = $image['name'];

        // Verificar que el archivo es una imagen
        $allowedTypes = ['image/gif', 'image/jpeg', 'image/png'];
        $fileType = mime_content_type($image['tmp_name']);
        
        // Obtener la extensión del archivo
        $fileParts = explode('.', $filename);
        $fileExtension = strtolower(end($fileParts));

        $validExtensions = [
            'image/gif' => 'gif',
            'image/jpeg' => 'jpeg',
            'image/png' => 'png'
        ];

        if (in_array($fileType, $allowedTypes) && $validExtensions[$fileType] === $fileExtension) {
            // Mover el archivo subido al directorio de destino
            $uploadFile = $uploadDir . $filename;
            if (move_uploaded_file($image['tmp_name'], $uploadFile)) {
                echo "<h1>$title</h1>";
                echo "<img src='$uploadFile' alt='$title'>";
            } else {
                echo "Error al subir la imagen.";
            }
        } else {
            echo "El archivo subido no es una imagen válida o la extensión no coincide con el tipo MIME.";
        }
    }
    ?>
</body>
</html>