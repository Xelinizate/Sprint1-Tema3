<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $X = array (10, 20, 30, 40, 50, 60);

        $midaArray = count($X);

        echo "La mida inicial de l'array es: $midaArray<br>";

        unset($X[3]);
        echo(count($X));



    ?>

</body>
</html>