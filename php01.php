<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1 (PHP)</title>
</head>
<body>
    <h1>Problema 1</h1>
    <?php 
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            echo "<p>¡Buenos días $nombre!</p>";
        }
    ?>
</body>
</html>