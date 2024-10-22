<!--
Create a folder called exercises4 where you can place the exercises for this session. 
Inside, create a subfolder called books with two PHP pages:
• form_libros.php with a form like the one below. Genres should appear in the drop-down list 
Narrative, Textbooks and Guides and maps.
• The form should be submitted to a page called result_libros.php that shows a summary of 
what has been submitted by the form, and has a link to return to the previous form
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de libros</title>
</head>
<body>
    <h1>Buscador de libros</h1>
    <form action="result_libros.php" method="GET">
        <label for="search_text">Texto de búsqueda:</label>
        <input type="text" id="search_text" name="search_text" required><br><br>

        <label>Buscar en:</label>
        <input type="radio" id="titulo" name="search_in" value="titulo" checked>
        <label for="titulo">Título del libro</label>

        <input type="radio" id="autor" name="search_in" value="autor">
        <label for="autor">Nombre del autor</label>

        <input type="radio" id="editorial" name="search_in" value="editorial">
        <label for="editorial">Editorial</label><br><br>

        <label for="tipo_libro">Tipo de libro:</label>
        <select id="tipo_libro" name="tipo_libro">
            <option value="Narrativa">Narrativa</option>
            <option value="Libros de texto">Libros de texto</option>
            <option value="Guías y mapas">Guías y mapas</option>
        </select><br><br>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>
