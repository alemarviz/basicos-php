<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 2</title>
</head>
<body>
    <h1>Problema 2</h1>
    <form action="prob2.php" method="POST">
        <p>
            <label for="n1">Dame un número:</label>
            <input type="number" name="n1" id="n1" value="0">
        </p>
        <p>
            <label for="n2">Dame otro número:</label>
            <input type="number" name="n2" id="n2" value="0">
        </p>
        <p>
            <input type="button" value="Operaciones">
        </p>
    </form>
    <?php 
        if ( isset($_POST['n1']) && isset($_POST['n2']) ) 
        {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            $suma = $n1 + $n2;
            $rest = $n1 - $n2;
            $mult = $n1 * $n2;
            $divi = $n1 / $n2;
        
            echo "<p>Resultados:<br/>";
            echo "$n1 + $n2 = $suma<br/>";
            echo "$n1 - $n2 = $rest<br/>";
            echo "$n1 x $n2 = $mult<br/>";
            echo "$n1 / $n2 = $divi</p>";
        }
    ?>
</body>
</html>