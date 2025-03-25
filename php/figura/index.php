<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figura</title>
</head>
<body>
    <?php
        $numero = 10;

        // Primera parte
        for ($i = 1; $i<= $numero; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }

        // Línea de en medio
        for ($i = 0; $i < $numero + 1; $i++) {
            echo "+";
        }
        echo "<br>";

        // Segunda parte
        for ($i = $numero; $i >= 1; $i--) {// los "--" sirven para que vaya restando es decir si antes era 4 pasa a ser 3 
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>
