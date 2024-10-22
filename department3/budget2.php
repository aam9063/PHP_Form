<!--
Create a page named budget2.php that has the form with the drop-down list of departments, 
and call yourself to calculate the budget based on what is submitted by your own form.

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto del Departamento</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="department">Seleccione un departamento:</label>
        <select name="department" id="department">
            <option value="COMPUTER">COMPUTER</option>
            <option value="LANGUAGE">LANGUAGE</option>
            <option value="MATHEMATICS">MATHEMATICS</option>
            <option value="ENGLISH">ENGLISH</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET['department'])) {
        $department = $_GET['department'];
        echo "<h1>Presupuesto del Departamento</h1>";
        switch ($department) {
            case 'COMPUTER':
                echo "El presupuesto asignado al departamento de COMPUTER es de 500 euros.";
                break;
            case 'LANGUAGE':
                echo "El presupuesto asignado al departamento de LANGUAGE es de 300 euros.";
                break;
            case 'MATHEMATICS':
                echo "El presupuesto asignado al departamento de MATHEMATICS es de 300 euros.";
                break;
            case 'ENGLISH':
                echo "El presupuesto asignado al departamento de ENGLISH es de 400 euros.";
                break;
            default:
                echo "Departamento no válido.";
                break;
        }
    }
    ?>
</body>
</html>