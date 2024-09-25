<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $personal = array(
            "nom" => "Adriana",
            "edat" => 38,
            "email"=> "xelinizate86@gmail.com",
            "menjar" => "pizza"
        );

        foreach ($personal as $item => $value):
            echo($item . " - " . $value . "<br>");
        endforeach;

    ?>
</body>
</html>