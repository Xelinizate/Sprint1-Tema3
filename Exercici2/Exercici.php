
    <?php

        $X = [10, 20, 30, 40, 50, 60];

        array_walk($X, function($X, $posicion){echo $X . PHP_EOL;});

        $midaArray = count($X);

        echo "La mida inicial de l'array es: $midaArray<br>";

        foreach($X as $index => $valor){
            echo "Index: $index, Valor: $valor <br>"; 
        }


        unset($X[3]);

        $X = array_values($X);
        echo "Nombre d'elements reals " . count($X) . "<br>";

    

    



    ?>

