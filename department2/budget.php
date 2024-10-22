<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto del Departamento</title>
</head>
<body>
    <?php
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
                echo "No se ha seleccionado ningún departamento.";
                break;
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br><a href='form_dep2.php'>Volver</a>";
    ?>
</body>
</html>