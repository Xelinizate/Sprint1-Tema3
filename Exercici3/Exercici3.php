<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $ciutats = ["Melbourn","Morella","Munich"];

        function caracters($ciutats, $caracter){
            $cerca = array_filter($ciutats, function($ciutat) use ($caracter){
                return stripos($ciutat, $caracter) !== false;
            });
            
            return count($cerca) === count($ciutats);
        }


        
        $caracter = "m";
       
        $resultat = caracters($ciutats, $caracter);
        var_dump($resultat);

        echo "<br>";

        $caractError = "r";

        $resultatError = caracters($ciutats, $caractError);
        var_dump($resultatError);

    ?>
</body>
</html>