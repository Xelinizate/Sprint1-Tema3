
    <?php

        $ciutats = ["Melbourn","Morella","Munich"];
        $value = 'M';


        function valorIgual($ciutats, $value){
        foreach($ciutats as $ciutat):
            if (str_contains($ciutat, $value) === false){
                return false;
                break;
            }
            endforeach;

            return true;
        }

        $resultat = valorIgual($ciutats, $value);
        var_dump($resultat);

        $value1 = 'e';
        $resultat = valorIgual($ciutats, $value1);
        var_dump($resultat);

    

    ?>
