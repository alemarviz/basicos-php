<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
</head>
<body>
    <h1>Saludos</h1>
    <form action="saludos.php" method="post">
        <input type="text" name="nombre" id="nombre">
        <input type="button" value="subir">
    </form>
    <?php 
        print_r($_POST);
        if ( isset($_POST['nombre'])) {
            echo "<p>$nombre</p>";
        }
    ?>
</body>
</html>