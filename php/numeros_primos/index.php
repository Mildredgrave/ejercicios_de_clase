<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <h2>Números Primos del 1 al 1000</h2>
    <p>
        <?php
        for ($num = 1; $num <= 1000; $num++)
        {
            if ($num == 1)
                continue; // no toma al 1 y continua
            
            $esPrimo = true;
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $esPrimo = false;
                    break;
                }
            }
            if ($esPrimo) {
                echo $num . " ";
            }
        }
        ?>
    </p>
</body>
</html>
