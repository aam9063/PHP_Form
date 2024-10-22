<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del buscador</title>
</head>
<body>
    <h1>Resultados de la búsqueda</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") { // Check if the form has been submitted
        $search_text = $_GET['search_text']; // Get the values from the form
        $search_in = $_GET['search_in']; // Get the values from the form
        $tipo_libro = $_GET['tipo_libro']; // Get the values from the form

        echo "<p><strong>Texto de búsqueda:</strong> $search_text</p>";
        echo "<p><strong>Buscar en:</strong> $search_in</p>";
        echo "<p><strong>Tipo de libro:</strong> $tipo_libro</p>";
    }
    ?>
    <br>
    <a href="form_libros.php">Regresar al formulario</a>
</body>
</html>