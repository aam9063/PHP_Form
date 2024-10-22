<!--
Modify the previous exercise, creating one more page called form_dep2.php that,
 instead of a form with the drop-down list, shows the user 4 links with the 4 department names. 
 The links must send (all) to the budget.php page, indicating which department is selected, so 
 that we obtain the same result as with the previous form.
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Enlaces de Departamentos</title>
</head>
<body>
    <h1>Seleccione un departamento:</h1>
    <ul>
        <li><a href="budget.php?department=COMPUTER">COMPUTER</a></li>
        <li><a href="budget.php?department=LANGUAGE">LANGUAGE</a></li>
        <li><a href="budget.php?department=MATHEMATICS">MATHEMATICS</a></li>
        <li><a href="budget.php?department=ENGLISH">ENGLISH</a></li>
    </ul>

    
</body>
</html>