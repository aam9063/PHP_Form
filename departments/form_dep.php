<!--
Create a subfolder called departments in your exercise folder. Inside, create these two PHP pages:
• form_dep.php with a form that will display a drop-down list with 4 department names: COMPUTER LANGUAGE, 
MATHEMATICS and ENGLISH.
• The form will be sent to the budget.php page which must indicate the assigned budget in each case:
COMPUTER = 500 euros, LANGUAGE = 300 euros, MATHEMATICS = 300 euros, ENGLISH: 400 euros
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="budget.php" method="GET">
        <label for="department">Seleccione un departamento</label>
        <select name="department" id="department">
            <option value="COMPUTER">COMPUTER</option>
            <option value="LANGUAGE">LANGUAGE</option>
            <option value="MATHEMATICS">MATHEMATICS</option>
            <option value="ENGLISH">ENGLISH</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>